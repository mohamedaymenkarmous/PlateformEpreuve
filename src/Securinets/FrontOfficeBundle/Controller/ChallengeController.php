<?php

namespace Securinets\FrontOfficeBundle\Controller;
use Securinets\FrontOfficeBundle\Entity\ValidatedFlag;

use Securinets\FrontOfficeBundle\Entity\Flag;

use Monolog\Logger;

use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Securinets\FrontOfficeBundle\Entity\EpreuveChallenger;

use Symfony\Component\Security\Core\Security;
use Doctrine\DBAL\DBALException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ChallengeController extends Controller {

	/** Liste des epreuves **/
	public function getTasksAction() {

		try {
			$chaine_brute = file_get_contents(
					$this->container->getParameter('epreuvesFile'));

			$chaine = substr($chaine_brute, 0, strpos($chaine_brute, '#'));

			$list = explode(':', $chaine);

		} catch (Exception $e) {
			$list = array();
			$logger = $this->get('monolog.logger.fileException');
			$logger->warn($this->getLogMessage("getTasks "));
		}

		$rep = $this->getDoctrine()->getManager()
				->getRepository('SecurinetsFrontOfficeBundle:Epreuve');
		$rep2 = $this->getDoctrine()->getManager()
				->getRepository('SecurinetsFrontOfficeBundle:EpreuveChallenger');
		try {
			$epreuves = $rep->getByListId($list);
			$validatedTasks = $rep2
					->findTaskByUser(
							$this->container->get("security.token_storage")
									->getToken()->getUser()->getId());
		} catch (DBALException $ex) {
			$logger = $this->get('monolog.logger.dbalException');
			$logger
					->warn(
							$this
									->getLogMessage(
											"getValidatedTasks (getTasksAction)"));
			$epreuves = array();
		}

		return $this
				->render(
						"SecurinetsFrontOfficeBundle:Challenge:tasks.html.twig",
						array("epreuves" => $epreuves,
								"epreuvesValides" => $validatedTasks));
	}
	/** Fin action liste des epreuves **/

	public function getTaskAction($id_epreuve) {
		$solved = false;

		try {
			$manager = $this->getDoctrine()->getManager();
			$rep = $manager
					->getRepository('SecurinetsFrontOfficeBundle:Epreuve');
			$rep1 = $manager
					->getRepository(
							'SecurinetsFrontOfficeBundle:EpreuveChallenger');
			$epreuve = $rep->find($id_epreuve);
			$x = $rep1
					->findByIdUserAndIdEpreuve(
							$this->container->get("security.token_storage")
									->getToken()->getUser()->getId(),
							$id_epreuve);
			if ($x != null)
				$solved = true;

		} catch (DBALException $e) {
			$logger = $this->get('monolog.logger.dbalException');
			$logger->warn($this->getLogMessage("getEpreuve  (getTaskAction)"));
			$epreuve = null;
		}

		return $this
				->render(
						"SecurinetsFrontOfficeBundle:Challenge:task.html.twig",
						array('epreuve' => $epreuve, 'solved' => $solved));

	}

	/** Methode liée aux validation **/
	public function validateAction($id,Request $request) {
		$reponse = array();
		$reponse['redirection'] = false;
		$reponse['result'] = false;
		$reponse['validate'] = false;
		$manager = $this->getDoctrine()->getManager();
		$id_user = $this->container->get("security.token_storage")->getToken()
				->getUser()->getId();
		try {
			$user = $manager->getRepository("SecurinetsUsersBundle:User")
					->find($id_user);
		} catch (DBALException $ex) {
			$logger = $this->get('monolog.logger.dbalException');
			$logger->warn($this->getLogMessage("validation  (validateAction)"));
			$reponse['redirection'] = true;
			$reponse['url'] = $this->generateUrl('index');
			return new Response(json_encode($reponse));
		}

		//Test sur le bruteforce 
		$session = $this->get('session');
		if ($session->has($id)) {
			$t = $session->get($id);
			$diff = time() - $t;
			if ($diff < 2) // 5 secondes avant de revalidé
            {
				$reponse['redirection'] = true;
				$reponse['url'] = $this->generateUrl('index');// à changer
				$user->setIsActive(false);
				try {
					$manager->flush();
				} catch (DBALException $ex) {
					//logger DBALException
					$logger = $this->get('monolog.logger.dbalException');
					$logger
							->warn(
									$this
											->getLogMessage(
													"banned  (validateAction)"));
				}

				//logger Banned member
				$logger = $this->get('monolog.logger.bannedMember');
				$logger
						->info(
								$this
										->getLogMessage(
												"is banned  (validationAction)"));
				return new Response(json_encode($reponse));
				//tester sur l'ip
			}
		}
		$session->set($id, time());
		// fin test sur le bruteforce

		// $id ==0 => url modifié
		if ($id == 0) {
			$reponse['redirection'] = true;
			$reponse['url'] = $this->generateUrl('index');
			$logger = $this->get('monolog.logger.erreurDeclenche');
			$logger
					->info(
							$this
									->getLogMessage(
											"\$id=0 (url modifie)  (validationAction)"));
			return new Response($reponse);
		}// fin $id == 0

		//$request = $this->getRequest();
		if (!$request->isXmlHttpRequest()) // requet qui vienne d'une autre place
 {
			$logger = $this->get('monolog.logger.erreurDeclenche');
			$logger
					->info(
							$this
									->getLogMessage(
											"validation !isXmlHttpRequest  (validationAction)"));
			return $this->redirect($this->generateUrl('index')); //redirection dont mess with the code
		}

		$flag = $request->request->get('flag');
		
		//haché le flag ...
		$flag = trim($flag);
		$flag = md5($flag);

		// Test sur la table challenger_epreuve $id_user  $id ce couple ne doit pas existé : redirection ( page attention )
		$ec = $manager
				->getRepository("SecurinetsFrontOfficeBundle:EpreuveChallenger")
				->findByIdUserAndIdEpreuve($id_user, $id);
		if ($ec != null) {
			$reponse['validate'] = true;
			return new Response(json_encode($reponse));
		}

		//recupération de l'epreuve
		$repository = $manager
				->getRepository("SecurinetsFrontOfficeBundle:Epreuve");
		try {
			$epreuve = $repository->find($id);
			$rightFlag = $epreuve->getFlag();
		} catch (DBALException $ex) {
			//write into log
			$logger = $this->get('monolog.logger.dbalException');
			$logger->warn($this->getLogMessage("getFlag   (validationAction)"));
		}

		//test si l'epreuve est disbled  !!
		if (!$epreuve->getIsEnabled() ) {
			$reponse['result'] = false;
			$reponse['disabled'] = true;
			$reponse['message'] = 'This task is disabled ';
			return new Response(json_encode($reponse));
		}
		
		//test si l'epreuve est un Bonus et elle est déja validée  !!
		if ($epreuve->getType() == 'BONUS' && !$epreuve->getIsEnabled()) {
			$reponse['result'] = false;
			$reponse['bonus'] = true;
			$reponse['message'] = 'Oupps , you are late , this task is already validaded by an other !! ';
			return new Response(json_encode($reponse));
		}

		//test sur l'epreuve
		if ($rightFlag == $flag) {
			//mise à jour de la table user

			$user = $manager->getRepository("SecurinetsUsersBundle:User")
					->find($id_user);
			$score = $user->getScore();
			$score += $epreuve->getPoints();
			$user->setScore($score)->setTime(new \DateTime("NOW"));

			//desactivé l'epreuve si elle est une epreuve Bonus !
			if ($epreuve->getType() == 'BONUS') {
				$epreuve->setIsEnabled(false);
			}

			//creation d'une nouvelle instance challenger_epreuve
			$ec = new EpreuveChallenger();
			$ec->setEpreuve($epreuve)->setUser($user)
					->setTime(new \DateTime("NOW"));

			try {
				$manager->persist($ec);
				$manager->flush();

			} catch (DBALException $e) {
				//write into log
				$logger = $this->get('monolog.logger.dbalException');
				$logger
						->warn(
								$this
										->getLogMessage(
												"can't register the validation  (validationAction)"));
			}

			
			$logger = $this->get('monolog.logger.validation');
			$logger
			->info(
					$this
					->getLogMessage(
							"validate task ".$epreuve->getName() . "(validationAction)"));
			$reponse['result'] = true;
			return new Response(json_encode($reponse));
		}

		$reponse['result'] = false;
		return new Response(json_encode($reponse));
	}

	/** Fin Validate **/

	/**   Score Action **/
	public function scoreAction() {

		$manager = $this->getDoctrine()->getManager();
		$rep = $manager->getRepository('SecurinetsUsersBundle:User');

		try {
			$list = $rep->getScore();
		} catch (DBALException $ex) {
			//write into log
			$logger = $this->get('monolog.logger.dbalException');
			$logger
					->warn(
							$this
									->getLogMessage(
											"can't recieve the score  (scoreAction)"));

		}
		return $this
				->render(
						"SecurinetsFrontOfficeBundle:Challenge:rating.html.twig",
						array('list' => $list));
	}

	public function getLogMessage($msg) {
		$user = $this->get("security.token_storage")->getToken()->getUser();
		$time = getdate(time());
		$data = $time['year'] ."/". $time['month']."/".$time['mday']." ".  $time['hours'].":". $time['minutes'].":". $time['seconds'] ." ". $user->getUsername()
				." ". $msg . "\n";
		return $data;
	}

	public function erreurConnexionAction() {
		return new Response("Sorry a problem has occurred , please try again ");
	}

/**   Stat Action **/

	public function statAction() {

		$manager = $this->getDoctrine()->getManager();
		$rep = $manager->getRepository('SecurinetsUsersBundle:User');
		$rep2 = $this->getDoctrine()->getManager()
				->getRepository('SecurinetsFrontOfficeBundle:EpreuveChallenger');
		try {
			$list = $rep->getStat();
			//$epreuves = $rep->getByListId($list);
			$validatedTasks = $rep2
					->findTaskByUser(
							$this->container->get("security.token_storage")
									->getToken()->getUser()->getId());
		} catch (DBALException $ex) {
			//write into log
			$logger = $this->get('monolog.logger.dbalException');
			$logger
					->warn(
							$this
									->getLogMessage(
											"can't recieve the score  (scoreAction)"));

		}
		return $this
				->render(
						"SecurinetsFrontOfficeBundle:Challenge:stat.html.twig",
						array('list' => $list));
	}
	public function rankAction() {
		$id = $this->container->get("security.token_storage")->getToken()->getUser()
				->getId();
		$rep = $this->getDoctrine()->getManager()
				->getRepository("SecurinetsUsersBundle:User");
		try {
			$rank = $rep->getRank($id);
		} catch (DBALException $e) {
			$logger = $this->get('monolog.logger.dbalException');
			$logger
					->warn(
							$this
									->getLogMessage(
											"can't get the rank (rankAction)"));
			$rank = 0;
		}
		return new Response($rank);
	}
	
	public function challengerInfoAction(){
		$rank = 0; 
		if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) {
		
		$id = $this->container->get("security.token_storage")->getToken()->getUser()->getId();
		$rep = $this->getDoctrine()->getManager()
		->getRepository("SecurinetsUsersBundle:User");
		try {
			$rank = $rep->getRank($id);
		} catch (DBALException $e) {
			$logger = $this->get('monolog.logger.dbalException');
			$logger
			->warn(
					$this
					->getLogMessage(
							"can't get the rank (rankAction)"));
			$rank = 0;
		}
		}
		return $this->render("SecurinetsFrontOfficeBundle:Challenge:inforamtions.html.twig",array('rank'=> $rank));
	}

	
	public function getNewsAction()
	{
		$newsfile = $this->container->getParameter('newsFile') ;
		
		
		$response = array();
		$response['news']  ="" ;
		
		
		if (file_exists($newsfile))
		{
			$news = file_get_contents($newsfile) ;
			$response['exist'] = true ;
			$response['news']  =$news ;
			return new Response(json_encode($response)) ;
		}
		
		$response['exist'] = false ;
		
		
		
		return new Response(json_encode($response)) ;
		
		
	}
	
	/**
	 * @Route("getFlagForm", name="getFormFlag")
	 */
	public function getFlagFormAction(Request $request)
	{
		//$flage=new Flag();
		//$flage->setFlag('My flag');
		$form = $this->createFormBuilder(/*$flage*/)
						->add("flag",TextType::class)
						->add("validate",ButtonType::class)
						->getForm();
		return $this->render("SecurinetsFrontOfficeBundle:Challenge:flagForm.html.twig",array("form"=>$form->createView()));
		
	}
	
	/**
	 * @Route("validateFlag",name="validateFlag")
	 */
/*	public function validateFlagAction(Request $request)
	{
//		$request = $this->getRequest();
//		$request = $this->get('request');

		$reponse = array();
		$reponse['validate'] = false ;
		$reponse['validated'] = false ;
		$reponse['burn'] = false ;	
		$reponse['no'] = false ;	
		$form = $request->request->get('flag') ;
		$flagPost  = md5($form);
                //$reponse['validated'] = $flagPost  ; //aussi
		//$reponse['burn']= var_dump($request->request); // à effacer !!!
		$flag = new Flag();
		
		
		try{
		$manager = $this->getDoctrine()->getManager();
		$flag = $manager->getRepository("SecurinetsFrontOfficeBundle:Flag")->find($flagPost);
		$user = $manager->getRepository("SecurinetsUsersBundle:User")->find($this->get("security.token_storage")->getToken()->getUser()->getId());
		
		if ($flag != null) 
		{
			//$reponse['validated'] =$flag;
			if ($user->getId() == $flag->getEquipe()->getId())
			{
				$reponse['no'] = true ;
				return new Response(json_encode($reponse));
			}
			
			if ($flag->getValidated())
			{
				$reponse['burn'] = true ;
				return new Response(json_encode($reponse));
			}
			
			foreach ($user->getValidatedFlags() as $fv)
			{
				if ($fv->getFlag() == $flag )
				{
					$reponse['validated'] = true ;
					return new Response(json_encode($reponse));
				}
			}
			$reponse['validate'] = true ;
			$vf = new ValidatedFlag();
			$vf->setEquipe($user)
					->setFlag($flag);
			
			$user->setScore($user->getScore() + $flag->getPoints() )->setTime(new \DateTime("NOW"));
			$flag->setValidated(true);
			
			$manager->persist($flag);
			$manager->persist($user);
			$manager->persist($vf);
			$manager->flush();
		}
		}catch(DBALException $e)
		{
			$logger = $this->get('monolog.logger.dbalException');
			$logger
			->warn(
					$this
					->getLogMessage(
							"Validation flag problem".$e->getMessage()));
		}
		return new Response(json_encode($reponse));
	}*/
	
	
	
	
	
	
	
}
