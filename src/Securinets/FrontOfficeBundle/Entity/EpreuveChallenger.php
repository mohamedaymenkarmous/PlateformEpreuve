<?php

namespace Securinets\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EpreuveChallenger
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="key2", columns={"user_id", "epreuve_id"})})
 * @ORM\Entity(repositoryClass="Securinets\FrontOfficeBundle\Entity\EpreuveChallengerRepository")
 */
class EpreuveChallenger
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Securinets\UsersBundle\Entity\User", inversedBy="epreuves")
     */
    private $user ;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Securinets\FrontOfficeBundle\Entity\Epreuve", inversedBy="users")
     */
    private $epreuve ;
    
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
     * Set time
     *
     * @param \DateTime $time
     * @return EpreuveChallenger
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set user
     *
     * @param \Securinets\UsersBundle\Entity\User $user
     * @return EpreuveChallenger
     */
    public function setUser(\Securinets\UsersBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Securinets\UsersBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set epreuve
     *
     * @param \Securinets\FrontOfficeBundle\Entity\Epreuve $epreuve
     * @return EpreuveChallenger
     */
    public function setEpreuve(\Securinets\FrontOfficeBundle\Entity\Epreuve $epreuve = null)
    {
        $this->epreuve = $epreuve;
    
        return $this;
    }

    /**
     * Get epreuve
     *
     * @return \Securinets\FrontOfficeBundle\Entity\Epreuve 
     */
    public function getEpreuve()
    {
        return $this->epreuve;
    }
}