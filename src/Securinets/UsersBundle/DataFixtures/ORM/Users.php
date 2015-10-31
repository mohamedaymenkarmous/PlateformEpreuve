<?php



namespace Securinets\FrontOfficeBundle\DataFixtures\ORM ;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Securinets\UsersBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Users implements FixtureInterface,ContainerAwareInterface {

    private $container ;
    
    public function setContainer(ContainerInterface $c = null)
    {
    	$this->container = $c ;
    }
	
	public function load(ObjectManager $manager)
	{
		$user = new User();
		$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
		$user->setEmail("assel.meher@gmail.com")
		     ->setIsActive(true)
		     ->setUsername("Pwnium")
		     ->setName("Assel")
		     ->setFirstname("Maher")
		     ->setScore(0)
		     ->setRoles(array('ROLE_CHALLENGER'))
		     ->setTime(null)
		     ->setSalt("");
		$user->setPassword($this->encodePassword($user,"bfvishgf3bis"));
		
		$manager->persist($user);
        
        $user2 = new User();
        $user2->setEmail("0x1337tunisia@gmail.com")
        ->setIsActive(true)
        ->setRoles(array('ROLE_CHALLENGER'))
        ->setUsername("Ox1337")
        ->setFirstname("Seif")
        ->setName("Seif")
        ->setScore(0)
        ->setTime(null)
        ->setSalt("");
        $user2->setPassword($this->encodePassword($user2,"hjvsqbu8yasd"));
       
        $manager->persist($user2);
        
        
        $user3 = new User();
        $user3->setEmail("nejmeddine.khechine@gmail.com")
        ->setIsActive(true)
        ->setUsername("PoisonedBytes")
        ->setName("Khechine")
        ->setFirstname("Nejmeddine")
        ->setScore(0)
        ->setRoles(array('ROLE_CHALLENGER'))
        ->setTime(null)
        ->setSalt("");
        $user3->setPassword($this->encodePassword($user3,"jsdbk9qshbd"));
        
        $manager->persist($user3);
        
        $user4 = new User();
        $user4->setEmail("marouen.battikh@yahoo.com")
        ->setIsActive(true)
        ->setRoles(array('ROLE_CHALLENGER'))
        ->setUsername("CodeName")
        ->setFirstname("Marouen")
        ->setName("Battikh")
        ->setScore(0)
        ->setTime(null)
        ->setSalt("");
        $user4->setPassword($this->encodePassword($user4,"oifhqhb4eza"));
         
        $manager->persist($user4);
        
        $user5 = new User();
        $user5->setEmail("404labtunisa@gmail.com")
        ->setIsActive(true)
        ->setRoles(array('ROLE_CHALLENGER'))
        ->setUsername("ShellShark")
        ->setFirstname("Inconnu")
        ->setName("Inconnu")
        ->setScore(0)
        ->setTime(null)
        ->setSalt("");
        $user5->setPassword($this->encodePassword($user5,"ouhdqs7dsq"));
         
        $manager->persist($user5);
        
        
        $manager->flush();
	
	}
	
	private function encodePassword($user, $plainPassword)
	{
		$encoder = $this->container->get('security.encoder_factory')
		->getEncoder($user)
		;

		return $encoder->encodePassword($plainPassword, $user->getSalt());
	}
	
}
