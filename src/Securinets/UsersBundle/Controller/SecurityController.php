<?php

namespace Securinets\UsersBundle\Controller;

use Securinets\UsersBundle\Entity\User;

//use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{

    public function loginAction(Request $request)
    {
        $response = parent::loginAction($request);
        //$data=array();
	//$data["page_included"] = "SecurinetsUsersBundle:Security:login.html.twig";
	//var_dump($request->getSession());
	//$data["error"] = null;
	//$data["last_username"]=null;
        //if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
        //else $parent='::template_parent.html.twig';
	//return $this->include($parent,$data);
	return $response;
	//return $this->render($parent,array("page_included" => "SecurinetsFrontOfficeBundle:Challenge:rules.html.twig") );

    }

    public function getLoginAction(Request $request) {
	//var_dump($request->query->get('error'));
	$response = parent::loginAction($request);
	// do custom stuff
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
    protected function renderLogin(array $data)
    {
	$parent="SecurinetsUsersBundle:Security:login.html.twig";
	$router = $this->get("router");$route = $router->match($this->container->get('request_stack')->getCurrentRequest()->getPathInfo());
    	//var_dump($data);
	//var_dump($route['_route']);
	if($route['_route']=="login"){
          $data["page_included"] = "SecurinetsUsersBundle:Security:login.html.twig";
          if ($this->get("security.authorization_checker")->isGranted('ROLE_CHALLENGER')) $parent='SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig';
          else $parent='::template_parent.html.twig';
	}elseif($route['_route']=="getLogin")$parent="SecurinetsUsersBundle:Security:login.html.twig";
        //return $this->render('login.html.twig', $data); //initialement
        return $this->render($parent,$data);
    }

}

