<?php
namespace Securinets\FrontOfficeBundle\Services ;

use Monolog\Logger;

class LoggerService {
	
	private  $logger ;
	
	public function __construct(Logger $logger)
	{
		$this->logger = $logger ;
	}
		
	
}
