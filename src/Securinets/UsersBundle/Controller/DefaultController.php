<?php

namespace Securinets\UsersBundle\Controller;

use Securinets\UsersBundle\Entity\User;

//use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class DefaultController extends Controller
{
    
/*    public function getRequest()
    {
        return $this->container->get('request_stack')->getCurrentRequest();
    }*/

    public function loginAction(/*Request $request*/)
    {
    	//$request = $this->getRequest();
/*    	$session = $request->getSession();
    	
    	if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    	{
    		return $this->redirect($this->generateUrl('home'));
    	}
    	
    	// get the login error if there is one
    	if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
    		$error = $request->attributes->get(Security::AUTHENTICATION_ERROR);
    	} else {
    		$error = $session->get(Security::AUTHENTICATION_ERROR);
    		$session->remove(Security::AUTHENTICATION_ERROR);
    	}
    	
    	
    	return $this->render('SecurinetsUsersBundle:Default:login.html.twig', array(
    			// last username entered by the user
    			'last_username' => $session->get(Security::LAST_USERNAME),
    			'error'         => $error
    	));    	*/
        $helper = $this->get('security.authentication_utils');

        return $this->render('SecurinetsUsersBundle:Default:login.html.twig', array(
            'last_username' => $helper->getLastUsername(),
            'error'         => $helper->getLastAuthenticationError(),
        ));
    }
    
    
    public function registerAction(Request $request) {
	   	
    	//l'objet user
    	$user = new User();
    	//appel de service
    	$encoder = $this->container->get('security.password_encoder');
    	//setting up the user
    	$user->setIsActive(true)
    	->setScore(0)
    	->setRoles(array('ROLE_CHALLENGER'))
    	->setTime(null)
    	->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));
    	//creation du formulaire
    	$formBuilder = $this->createFormBuilder($user);
    	//ajout des champs voulu
    	$formBuilder
    	->add('firstname',TextType::class)
    	->add('name',TextType::class)
    	->add('username',TextType::class)
    	->add('email',   TextType::class)
    	->add('password',PasswordType::class)
	->add('register',ButtonType::class);
    	//génération du formulaire
    	$form = $formBuilder->getForm();
    	// On récupère la requête
    	//$request = $this->get('request');
    	// On vérifie qu'elle est de type POST
    	if ($request->getMethod() == 'POST') {
    		// On fait le lien Requête <-> Formulaire
    		// À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par le visiteur
    		$form->bind($request);
    		// On vérifie que les valeurs entrées sont correctes
    		 
    		if ($form->isValid()) {
    			// On l'enregistre notre objet $user dans la base de données
    			$em = $this->getDoctrine()->getManager();
    			 
    			$pass = $user->getPassword();
    			 
    			$user->setPassword($encoder->encodePassword($user,$pass));
    			try {
    				$em->persist($user);
    				$em->flush();
    				return $this->redirect($this->generateUrl('login'));
    			} catch (\Exception $e) {
    
    			}
    			 
    			 
    		}
    	}
    
    	return $this->render('SecurinetsUsersBundle:Default:register.html.twig', array('form' => $form->createView()));
    

    	
    }
     

}
