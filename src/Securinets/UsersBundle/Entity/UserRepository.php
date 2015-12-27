<?php

namespace Securinets\UsersBundle\Entity;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;


/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository /*implements UserProviderInterface*/{
	
	
	public function getScore()
	{
		$qb = $this->createQueryBuilder('u')
		->orderBy('u.score','DESC')
		->addOrderBy('u.lastValidate','ASC');
		
		return $qb->getQuery()->getResult();
	}

	public function getStat()
	{
		$qb = $this->createQueryBuilder('u')
		->orderBy('u.score','DESC')
		->addOrderBy('u.lastValidate','ASC');
		
		$list=$qb->getQuery()->getResult();
		$result = array();
		foreach($list as $item => $val)
		{
	 		$result[] = $val;
		}
		
		return $result ;
	}

	public function getRank($id)
	{
		$qb = $this->createQueryBuilder('u')
		->select('u.id')
		->orderBy('u.score','DESC')
		->addOrderBy('u.lastValidate','ASC');
		
		$list =  $qb->getQuery()->getResult();
		
		$rank = 1 ;
		foreach($list as $x )
		{
			if ($x['id'] == $id ) return $rank ;
			$rank ++ ;
		}
		
		
		return $rank ;
	}
	
	
}
