<?php

namespace Securinets\FrontOfficeBundle\Controller;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	
	public function getRulesAction()
	{
		return $this->render("SecurinetsFrontOfficeBundle:Challenge:rules.html.twig");
	}

	public function indexAction()
	{
		return $this->redirect($this->generateUrl('home'));
		
	}
	
    public function homeAction()
    {

    	return $this->render('SecurinetsFrontOfficeBundle:Challenge:template_challenger.html.twig'	);
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
$tf = mktime(20,59,0,10,17,2015); // a modifier 
$t = time() ;
$count = $tf -  $t ;

return $count ;

    }
    
    
}
