<?php

namespace Securinets\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuves
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Securinets\FrontOfficeBundle\Entity\EpreuveRepository")
 */
class Epreuve
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
     * @var string
     *
     * @ORM\Column(name="id2", type="string", length=5)
     */
    private $id2;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=255)
     */
    private $flag;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isEnabled", type="boolean")
     */
    private $isEnabled;
    
    /**
     *
     * @ORM\Column(name="ip", type="string" , length=255)
     */
    private $ip;    

    
    /**
     * @ORM\OneToMany(targetEntity="Securinets\FrontOfficeBundle\Entity\EpreuveChallenger", mappedBy="epreuve")
     */
    private $users;
    
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
     * Set id2
     *
     * @param string $id2
     * @return Epreuves
     */
    public function setId2($id2)
    {
        $this->id2 = $id2;
    
        return $this;
    }

    /**
     * Get id2
     *
     * @return string 
     */
    public function getId2()
    {
        return $this->id2;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Epreuves
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Epreuves
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Epreuves
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set flag
     *
     * @param string $flag
     * @return Epreuves
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return string 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Epreuves
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Epreuves
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     * @return Epreuves
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
    
        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean 
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add users
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $users
     * @return Epreuve
     */
    public function addUser(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $users
     */
    public function removeUser(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add epreuveChallengers
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuveChallengers
     * @return Epreuve
     */
    public function addEpreuveChallenger(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuveChallengers)
    {
        $this->epreuveChallengers[] = $epreuveChallengers;
    
        return $this;
    }

    /**
     * Remove epreuveChallengers
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuveChallengers
     */
    public function removeEpreuveChallenger(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuveChallengers)
    {
        $this->epreuveChallengers->removeElement($epreuveChallengers);
    }

    /**
     * Get epreuveChallengers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpreuveChallengers()
    {
        return $this->epreuveChallengers;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Epreuve
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }
}