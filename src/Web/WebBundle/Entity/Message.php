<?php

namespace Web\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Web\WebBundle\Entity\Message
 */
class Message
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $telefon
     */
    private $telefon;

    /**
     * @var string $mail
     */
    private $mail;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var \DateTime $date
     */
    private $date;


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
     * Set name
     *
     * @param string $name
     * @return Message
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
     * Set telefon
     *
     * @param string $telefon
     * @return Message
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    
        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Message
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Message
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
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate()
    {
        $this->date = new \DateTime();
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
