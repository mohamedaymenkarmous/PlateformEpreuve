<?php

namespace Securinets\FrontOfficeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EpreuveChallengerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EpreuveChallengerRepository extends EntityRepository
{
	public function findTaskByUser($id_user)
	{
		$qb = $this->createQueryBuilder('ec')
		->join('ec.user', 'u')
		->join('ec.epreuve','e')
		->where('u.id = :id_user')
		->select('e.id')
		->setParameter('id_user', $id_user);
		
						$list = $qb->getQuery()->getResult() ;
		$result = array();
		foreach($list as $item => $val)
		{
	 		$result[] = $val['id'];
		}
		
		return $result ;
	}
	
	
	
	
	public function findByIdUserAndIdEpreuve($id_user,$id_ep)
	{
		
		$qb = $this->createQueryBuilder('ec')
		->join('ec.user', 'u')
		->join('ec.epreuve', 'e')
		->where('u.id = :id_user')
		->andWhere('e.id = :id_ep')
		->setParameter('id_user', $id_user)
		->setParameter('id_ep', $id_ep);
		
		return $qb->getQuery()->getResult() ;
		
	}
	
}
