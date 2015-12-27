<?php
// src/AppBundle/Entity/User.php

namespace Securinets\UsersBundle\Entity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Securinets\UsersBundle\Entity\UserRepository")
 */
class User extends BaseUser //implements AdvancedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

        /**
         * @ORM\Column(name="name", type="string", length=25 )
         *
         * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
         * @Assert\Length(
         *     min=3,
         *     max=255,
         *     minMessage="The name is too short.",
         *     maxMessage="The name is too long.",
         *     groups={"Registration", "Profile"}
         * )
         */
        protected $name;

        /**
         * @ORM\Column(name="firstname", type="string", length=25 )
         *
         * @Assert\NotBlank(message="Please enter your first name.", groups={"Registration", "Profile"})
         * @Assert\Length(
         *     min=3,
         *     max=255,
         *     minMessage="The first name is too short.",
         *     maxMessage="The first name is too long.",
         *     groups={"Registration", "Profile"}
         * )
         */
        protected $firstname;

        /**
         * @var integer
         *
         * @ORM\Column(name="score", type="integer" , nullable = true)
         */
        protected $score;


        /**
         * @var \DateTime
         *
         * @ORM\Column(name="lastValidate", type="integer" , nullable=true)
         */
        protected $lastValidate;

        /**
         * @ORM\OneToMany(targetEntity="Securinets\FrontOfficeBundle\Entity\EpreuveChallenger", mappedBy="user")
         */
        private $epreuves;

        /**
         * @ORM\OneToMany(targetEntity="Securinets\FrontOfficeBundle\Entity\Flag", mappedBy="equipe")
         */
        private $flags;

        /**
         * @ORM\OneToMany(targetEntity="Securinets\FrontOfficeBundle\Entity\ValidatedFlag", mappedBy="equipe")
         */
        private $Validatedflags;

        public function serialize()
        {
                return serialize(array(
                                $this->id,
                ));
        }

        public function unserialize($serialized)
        {
                list (
                                $this->id,
                ) = unserialize($serialized);
        }

        public function isEqualTo(UserInterface $user)
        {
                return $this->username === $user->getUsername();
        }


    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->score = 0 ;
        $this->roles= array('ROLE_CHALLENGER');
	$this->setLastValidate(time());
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

        /**
         * Set score
         *
         * @param integer $score
         * @return User
         */
        public function setScore($score) {
                $this->score = $score;

                return $this;
        }

        /**
         * Get score
         *
         * @return integer
         */
        public function getScore() {
                return $this->score;
        }

        /**
         * Set lastValidate
         *
         * @param integer $lastValidate
         * @return User
         */
        public function setLastValidate($lastValidate) {
                $this->lastValidate = $lastValidate;

                return $this;
        }

        /**
         * Get lastValidate
         *
         * @return integer
         */
        public function getLastValidate() {
                return $this->lastValidate;
        }


    /**
     * Add epreuves
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuves
     * @return User
     */
    public function addEpreuve(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuves)
    {
        $this->epreuves[] = $epreuves;

        return $this;
    }

    /**
     * Remove epreuves
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuves
     */
    public function removeEpreuve(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuves)
    {
        $this->epreuves->removeElement($epreuves);
    }

    /**
     * Get epreuves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpreuves()
    {
        return $this->epreuves;
    }

    /**
     * Add epreuveChallengers
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreuveChallengers
     * @return User
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
     * Set avertLevel1
     *
     * @param integer $avertLevel1
     * @return User
     */
    public function setAvertLevel1($avertLevel1)
    {
        $this->avertLevel1 = $avertLevel1;

        return $this;
    }

    /**
     * Get avertLevel1
     *
     * @return integer
     */
    public function getAvertLevel1()
    {
        return $this->avertLevel1;
    }


    /**
     * Add flags
     *
     * @param \Securinets\FrontOfficeBundle\Entity\Flag $flags
     * @return User
     */
    public function addFlag(\Securinets\FrontOfficeBundle\Entity\Flag $flags)
    {
        $this->flags[] = $flags;

        return $this;
    }

    /**
     * Remove flags
     *
     * @param \Securinets\FrontOfficeBundle\Entity\Flag $flags
     */
    public function removeFlag(\Securinets\FrontOfficeBundle\Entity\Flag $flags)
    {
        $this->flags->removeElement($flags);
    }

    /**
     * Get flags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Add Validatedflags
     *
     * @param \Securinets\FrontOfficeBundle\Entity\ValidatedFlag $validatedflags
     * @return User
     */
    public function addValidatedflag(\Securinets\FrontOfficeBundle\Entity\ValidatedFlag $validatedflags)
    {
        $this->Validatedflags[] = $validatedflags;

        return $this;
    }

    /**
     * Remove Validatedflags
     *
     * @param \Securinets\FrontOfficeBundle\Entity\ValidatedFlag $validatedflags
     */
    public function removeValidatedflag(\Securinets\FrontOfficeBundle\Entity\ValidatedFlag $validatedflags)
    {
        $this->Validatedflags->removeElement($validatedflags);
    }

    /**
     * Get Validatedflags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getValidatedflags()
    {
        return $this->Validatedflags;
    }


    /**
     * Add epreufe
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreufe
     *
     * @return User
     */
    public function addEpreufe(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreufe)
    {
        $this->epreuves[] = $epreufe;

        return $this;
    }

    /**
     * Remove epreufe
     *
     * @param \Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreufe
     */
    public function removeEpreufe(\Securinets\FrontOfficeBundle\Entity\EpreuveChallenger $epreufe)
    {
        $this->epreuves->removeElement($epreufe);
    }
}
