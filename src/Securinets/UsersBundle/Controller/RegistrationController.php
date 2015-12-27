<?php

namespace Securinets\UsersBundle\Controller;

use Securinets\UsersBundle\Entity\User;

//use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;

class RegistrationController extends BaseController
{

    public function registerAction(Request $request)
    {
        $response = parent::registerAction($request);
	//$response = $this->register($request);
	//$response = $response->renderRegister(array());
        //$data=array();
	//$data["page_included"] = "SecurinetsUsersBundle:Registration:register.html.twig";
        //if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
        //else $parent='::template_parent.html.twig';
	//return $this->render($parent, //array(
        //    $data //'form' => $form->createView(),)
        //);
	return $response;
	//return $this->render($parent,array("page_included" => "SecurinetsFrontOfficeBundle:Challenge:rules.html.twig") );

    }

    public function getRegisterAction(Request $request) {
	//var_dump($request->query->get('error'));
	$response = parent::registerAction($request);
	//$response = $this->register($request);
	// do custom stuff
	//$response=$this->renderRegister($response);
        return $response;
    }

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderRegister(array $data)
    {
	$parent="SecurinetsUsersBundle:Registration:register.html.twig";
	$router = $this->get("router");$route = $router->match($this->container->get('request_stack')->getCurrentRequest()->getPathInfo());
    	//var_dump($data);
	//var_dump($route['_route']);
	if($route['_route']=="register"){
          $data["page_included"] = "SecurinetsUsersBundle:Registration:register.html.twig";
          if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
          else $parent='::template_parent.html.twig';
	}elseif($route['_route']=="getRegister")$parent="SecurinetsUsersBundle:Registration:register.html.twig";
        //return $this->render('register.html.twig', $data); //initialement
        return $this->render($parent,$data);
    }

}

