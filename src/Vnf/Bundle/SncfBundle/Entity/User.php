<?php

namespace Vnf\Bundle\SncfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vnf\Bundle\SncfBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Vnf\Bundle\SncfBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Username
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $Username;

    /**
     * @var string $Password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $Password;

    /**
     * @var string $Email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $Email;

    /**
     * @var \DateTime $birhtday
     *
     * @ORM\Column(name="birhtday", type="date")
     */
    private $birhtday;

    /**
     * @var string $address
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;


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
     * Set Username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->Username = $username;
    
        return $this;
    }

    /**
     * Get Username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Set Password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->Password = $password;
    
        return $this;
    }

    /**
     * Get Password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->Email = $email;
    
        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set birhtday
     *
     * @param \DateTime $birhtday
     * @return User
     */
    public function setBirhtday($birhtday)
    {
        $this->birhtday = $birhtday;
    
        return $this;
    }

    /**
     * Get birhtday
     *
     * @return \DateTime 
     */
    public function getBirhtday()
    {
        return $this->birhtday;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
}
