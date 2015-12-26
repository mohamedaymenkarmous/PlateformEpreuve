<?php

namespace Securinets\FrontOfficeBundle\Controller;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->redirect($this->generateUrl('home'));
	}

	public function homeAction()
	{
		return $this->render('SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig');
	}


        public function getRulesAction()
        {
                return $this->render("SecurinetsFrontOfficeBundle:Challenge:rules.html.twig");
        }

        public function rulesAction()
        {
 	  if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
	  else $parent='::template_parent.html.twig';

                return $this->render($parent,
                        array("page_included" => "SecurinetsFrontOfficeBundle:Challenge:rules.html.twig") );

        }


	public function tasksAction()
	{
        	return $this->render('SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig',
			array("page_included" => "SecurinetsFrontOfficeBundle:Challenge:tasks.html.twig") );
	}


        public function scoreAction()
        {
          if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
          else $parent='::template_parent.html.twig';

                return $this->render($parent,
                        array("page_included" => "SecurinetsFrontOfficeBundle:Challenge:score.html.twig") );
        }


        public function statAction()
        {
          if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
          else $parent='::template_parent.html.twig';

                return $this->render($parent,
                        array("page_included" => "SecurinetsFrontOfficeBundle:Challenge:stat.html.twig") );
        }


    public function countDownAction()
    {
    	$rt = $this->remaingTime() ;
    	$chrono =  false ;
    	$h = 0 ; $m = 0 ;  $s = 0 ;
    	$time = array();
    	if (is_int($rt))
    	{
    	
    		$chrono = true ;
    		if ($rt > 0 ){
    			$t = getdate($rt) ;
    			$time['h'] = $t['hours'];
    			$time['m'] = $t['minutes'] ;
    			$time['s'] = $t['seconds'] ;
    		}else
    		{
    			 			// fin chrono ..
    		}  	
    	}
    	
    	//var_dump($time);
    	
    	return  $this->render("SecurinetsFrontOfficeBundle:Default:chrono.html.twig",array("time" => $time ));
    	
    }

 public function remaingTime()
    {
$tf = mktime(15,30,0,11,25,2015); // a modifier 
$t = time() ;
$count = $tf -  $t ;

return $count ;

    }
    
    
}
