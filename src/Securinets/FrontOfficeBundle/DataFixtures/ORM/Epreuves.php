<?php

namespace Securinets\FrontOfficeBundle\DataFixtures\ORM ;

use Securinets\FrontOfficeBundle\Entity\Epreuve;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Epreuves implements FixtureInterface {

	public function load(ObjectManager $manager)
	{
		
		/*$epreuves = array();
		
		for ($i = 0 ; $i< 6 ; $i++ )
		{
			$epreuves[$i] = new Epreuve() ;
			$epreuves[$i]->setId2("B".$i)
			             ->setName("Binary0".$i)
			             ->setDescription("Login : Binary".$i." Pw : PWBinary".$i)
			             ->setFlag("flagBinary".$i)
			             ->setPoints(10)
			             ->setType("BINARY")
			             ->setIsEnabled(true)
			             ->setUrl("/epreuves/Binary0".$i."/");
			$manager->persist($epreuves[$i]);
		}
		
		for ($i = 0 ; $i< 4 ; $i++ )
		{
			$epreuves[$i] = new Epreuve() ;
			$epreuves[$i]->setId2("W".$i)
			->setName("Web0".$i)
			->setDescription("Login : Web".$i." Pw : PWWeb".$i)
			->setFlag("flagWeb".$i)
			->setPoints(10)
			->setType("WEB")
			->setIsEnabled(true)
			->setUrl("/epreuves/Web0".$i."/");
			$manager->persist($epreuves[$i]);
		}
		
		for ($i = 0 ; $i< 4 ; $i++ )
		{
			$epreuves[$i] = new Epreuve() ;
			$epreuves[$i]->setId2("S".$i)
			->setName("Stegano0".$i)
			->setDescription("Login : Stegano".$i." Pw : PWStegano".$i)
			->setFlag("flagStegano".$i)
			->setPoints(10)
			->setType("STEGANO")
			->setIsEnabled(true)
			->setUrl("/epreuves/Stegano0".$i."/");
			$manager->persist($epreuves[$i]);
		} */
		
		
		$web1 = new Epreuve();
		$web1->setDescription("The first reflex for a hacker is to look into the code !!")
			 ->setName("Web1")
			 ->setId2("W1")
			 ->setFlag(md5("mQGhCspJ"))
			 ->setPoints(100)
			 ->setIsEnabled(true)
			 ->setType("WEB")
			 ->setIp("http://192.168.1.2:5555")
			 ->setURL("/epreuves/WEB/easyOne.php");
		$manager->persist($web1);
		
		$web2 = new Epreuve();
		$web2->setDescription("We do very nice things with the cookies ...")
		->setName("Web2")
		->setId2("W2")
		->setFlag(md5("pWhk7BSS"))
		->setPoints(150)
		->setIsEnabled(true)
		->setType("WEB")
		->setIp("http://192.168.1.2:5555")
		->setURL("/epreuves/WEB/cookies.php");
		$manager->persist($web2);
		
		$web3 = new Epreuve();
		$web3->setDescription("Simple function  ")
		->setName("Web3")
		->setId2("W3")
		->setFlag(md5("TkxZqQKt"))
		->setPoints(300)
		->setIsEnabled(true)
		->setType("WEB")
		->setIp("http://192.168.1.2:5555")
		->setURL("/epreuves/WEB/recursivity.php");
		$manager->persist($web3);		
		
		
		
		$web4 = new Epreuve();
		$web4->setDescription("The most famous web attack !! ")
		->setName("Web4")
		->setId2("W4")
		->setFlag(md5("7ZSVB7r0"))
		->setPoints(400)
		->setIsEnabled(true)
		->setType("WEB")
		->setIp("http://192.168.1.2:5555")
		->setURL("/epreuves/WEB/web4.php");
		$manager->persist($web4);
		
		$web5 = new Epreuve();
		$web5->setDescription("try to use alert() !! ")
		->setName("Web5")
		->setId2("W5")
		->setFlag(md5("yRA74fN4"))
		->setPoints(400)
		->setIsEnabled(true)
		->setType("WEB")
		->setIp("http://192.168.1.2:5555")
		->setURL("/epreuves/WEB/web5.php");
		$manager->persist($web5);
		
		$stega1 = new Epreuve();
		$stega1->setDescription("Just Smile and it will open for you")
		->setName("Stega1")
		->setId2("S1")
		->setFlag(md5("ulquiorra"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("STEGANO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/STEGANO/stega1.jpeg");
		$manager->persist($stega1);

$stega2 = new Epreuve();
		$stega2->setDescription("  ")
		->setName("Stega2")
		->setId2("S2")
		->setFlag(md5("zymm"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("STEGANO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/STEGANO/stega2.txt");
		$manager->persist($stega2);

$stega3 = new Epreuve();
		$stega3->setDescription("Easy no Hint !")
		->setName("stega3")
		->setId2("S3")
		->setFlag(md5("securinets"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("STEGANO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/STEGANO/stega3.rar");
		$manager->persist($stega3);

$stega4 = new Epreuve();
		$stega4->setDescription("Bad luminosity !!")
		->setName("Stega4")
		->setId2("S34")
		->setFlag(md5("3Q8rjc9E"))
		->setPoints(300)
		->setIsEnabled(true)
		->setType("STEGANO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/STEGANO/securinets.jpg");
		$manager->persist($stega4);


$crypto1 = new Epreuve();
		$crypto1->setDescription("Who is Jules ?!")
		->setName("Crypto1")
		->setId2("C1")
		->setFlag(md5("bleach"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("CRYPTO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/CRYPTO/crypto1.txt");
		$manager->persist($crypto1);

$crypto2 = new Epreuve();
		$crypto2->setDescription("Double Crypted string , think to tranpose with a SMILE please")
		->setName("Crypto2")
		->setId2("C2")
		->setFlag(md5("python"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("CRYPTO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/CRYPTO/crypto2.txt");
		$manager->persist($crypto2);


$crypto3 = new Epreuve();
		$crypto3->setDescription("ubuntu..")
		->setName("Crypto3")
		->setId2("C3")
		->setFlag(md5("pentagone"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("CRYPTO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/CRYPTO/crypto3.txt.gpg");
		$manager->persist($crypto3);


$crypto4 = new Epreuve();
		$crypto4->setDescription("Modern Encryption is cool let’s fish the flag")
		->setName("Crypto4")
		->setId2("C4")
		->setFlag(md5("isak"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("CRYPTO")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/CRYPTO/crypto4.rar");
		$manager->persist($crypto4);

$miscs1 = new Epreuve();
		$miscs1->setDescription("What can we do with a .class file ?")
		->setName("miscs1")
		->setId2("M1")
		->setFlag(md5("bankai"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("MISCS")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/MISCS/miscs1.rar");
		$manager->persist($miscs1);

$miscs2 = new Epreuve();
		$miscs2->setDescription("WHat can we do with a jar file?")
		->setName("miscs2")
		->setId2("M2")
		->setFlag(md5("zanpakuto"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("MISCS")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/MISCS/miscs2.jar");
		$manager->persist($miscs2);

$miscs3 = new Epreuve();
		$miscs3->setDescription("  ")
		->setName("miscs3")
		->setId2("M3")
		->setFlag(md5("s6g1BWq9"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("MISCS")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/MISCS/miscs3.rar");
		$manager->persist($miscs3);

$binary1 = new Epreuve();
		$binary1->setDescription("Try to see the program Strings?! SSH : login=level1 password=level1")
		->setName("binary1")
		->setId2("B1")
		->setFlag(md5("hackmeifyoucan"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("BINARY")
		->setIp("192.168.1.3")
		->setURL(" ");
		$manager->persist($binary1);

$reseau1 = new Epreuve();
		$reseau1->setDescription(" ")
		->setName("reseau1")
		->setId2("R1")
		->setFlag(md5("LOOOL"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("RESEAU")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/RESEAU/reseau1.rar");
		$manager->persist($reseau1);

$reseau2 = new Epreuve();
		$reseau2->setDescription("Follow it and sniff it :D ")
		->setName("reseau2")
		->setId2("R2")
		->setFlag(md5("falken/joshua"))
		->setPoints(40)
		->setIsEnabled(true)
		->setType("RESEAU")
		->setIp("http://192.168.1.5:5555")
		->setURL("/epreuves/RESEAU/reseau2.rar");
		$manager->persist($reseau2);
		
		$manager->flush();
		
	}
	
}
