<?php
namespace Securinets\FrontOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 *@ORM\Table()
 *
 */
class ValidatedFlag {
	
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id ;
	
	/**
	 * @ORM\ManyToOne(targetEntity = "Securinets\UsersBundle\Entity\User" , inversedBy="Validatedflags")
	 */
	private $equipe ;
	
	/**
	 * @ORM\ManyToOne(targetEntity = "Securinets\FrontOfficeBundle\Entity\Flag" , inversedBy="Validatedflags")
	 * @ORM\JoinColumn(name="flag",referencedColumnName="flag")
	 */
	private $flag ;
	
	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set equipe
     *
     * @param \Securinets\UsersBundle\Entity\User $equipe
     * @return ValidatedFlag
     */
    public function setEquipe(\Securinets\UsersBundle\Entity\User $equipe = null)
    {
        $this->equipe = $equipe;
    
        return $this;
    }

    /**
     * Get equipe
     *
     * @return \Securinets\UsersBundle\Entity\User 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set flag
     *
     * @param \Securinets\FrontOfficeBundle\Entity\Flag $flag
     * @return ValidatedFlag
     */
    public function setFlag(\Securinets\FrontOfficeBundle\Entity\Flag $flag = null)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return \Securinets\FrontOfficeBundle\Entity\Flag 
     */
    public function getFlag()
    {
        return $this->flag;
    }
}