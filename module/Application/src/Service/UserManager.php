<?php
namespace Application\Service;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Application\Entity\User;

/**
 * The UserManager service is responsible for adding new users, updating and
 * deleting current users.
 */
class UserManager
{
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager;
     */
    private $entityManager;

    private $user;
    /**
     * Constructor.
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

        /**
     * This method adds a new user.
     */
    public function addNewUser($data) 
    {
        // Create new User entity.
        $user = new User();
        $user->setFirstName($data['firstname']);
        $user->setLastName($data['lastname']);      
        $user->setAddress($data['address']);
        $user->setZipCode($data['zipcode']);
        $user->setTown($data['town']);
        $user->setCountry($data['country']);
        $user->setEmail($data['email']);
        $user->setUsername($data['username']);
        $user->setPassword($data['password']);
        $user->setPrivilege(1);

        var_dump($user);

        // Add the entity to entity manager.
        $this->entityManager->persist($user);
                
        // Apply changes to database.
        $this->entityManager->flush();
    }
}


