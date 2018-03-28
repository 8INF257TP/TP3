<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a single user in the bd
 * @ORM\Entity(repositoryClass="\Application\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User 
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")   
   */
  protected $id;

  /** 
   * @ORM\Column(name="firstname")  
   */
  
    protected $firstname;

  /** 
   * @ORM\Column(name="lastname")  
   */
    protected $lastname;

  /** 
   * @ORM\Column(name="address")  
   */
    protected $address;

  /**
   * @ORM\Column(name="zip_code")  
   */
    protected $zipCode;
  
  /**
   * @ORM\Column(name="town")  
   */
    protected $town;

  /**
   * @ORM\Column(name="country")  
   */
    protected $country;

  /**
   * @ORM\Column(name="email")  
   */
    protected $email;

    /**
   * @ORM\Column(name="username")  
   */
    protected $username;

      /**
   * @ORM\Column(name="password")  
   */
    protected $password;

        /**
   * @ORM\Column(name="privilege")  
   */
    protected $privilege;


  // Returns ID of this user.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this user.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns first name of this user.
  public function getFirstName() 
  {
      return $this->firstname;
  }

  // Sets first name of this user.
  public function setFirstName($firstname) 
  {
      $this->firstname = $firstname;
  }

  // Sets last name of this user.
  public function getLastName() 
  {
      return $this->lastname;
  }

  // Sets last name of this user.
  public function setLastName($lastname) 
  {
      $this->lastname = $lastname;
  }

  // Sets address of this user.
  public function getAddress() 
  {
      return $this->address;
  }

  // Sets address of this user.
  public function setAddress($address) 
  {
      $this->address = $address;
  }

  // Returns zip code of this user.
  public function getZipCode() 
  {
      return $this->zipCode;
  }

  // Sets zip code of this user.
  public function setZipCode($zipCode) 
  {
      $this->zipCode = $zipCode;
  }

  // Sets town of this user.
  public function getTown() 
  {
      return $this->town;
  }

  // Sets town of this user.
  public function setTown($town) 
  {
      $this->town = $town;
  }

  // Sets country of this user.
  public function getCountry() 
  {
      return $this->country;
  }

  // Sets country of this user.
  public function setCountry($country) 
  {
      $this->country = $country;
  }

  // Get email of this user.
  public function getEmail() 
  {
      return $this->email;
  }

  // Sets email of this user.
  public function setEmail($email) 
  {
      $this->email = $email;
  }

  // Returns username of this user.
  public function getUsername() 
  {
      return $this->username;
  }

  // Sets username of this user.
  public function setUsername($username) 
  {
      $this->username = $username;
  }

    // Returns Password of this user.
  public function getPassword() 
  {
      return $this->password;
  }

  // Sets password of this user.
  public function setPassword($password) 
  {
      $this->password = $password;
  }

  // Returns privilege of this user
  public function getPrivilege() 
  {
      return $this->privilege;
  }

  // Sets privilege of this user.
  public function setPrivilege($privilege) 
  {
      $this->privilege = $privilege;
  }
}