<?php
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;
use Application\Entity\Post;

class UserRepository extends EntityRepository
{
    private $data = [
        1 => [
            'id'    => 1,
            'firstname' => 'Pierre-Marc',
            'lastname' => 'Laforest',
            'address' => '1111 rue Alma',
            'zipCode' => 'G1Q1Q9',
            'town' => 'Jonquiere',
            'country' => 'Canada',
            'email' => 'exemple@hotmail.com',
            'password' => '123',
            'privilege' => 1,
        ],
        2 => [
            'id'    => 2,
            'firstname' => 'Michael',
            'lastname' => 'Lizotte-Gagnon',
            'address' => '2286 rue bourdeau',
            'zipCode' => 'G1Q1Q8',
            'town' => 'Alma',
            'country' => 'Canada',
            'email' => 'exemple2@hotmail.com',
            'password' => '1234',
            'privilege' => 1,
        ],
        3 => [
            'id'    => 3,
            'firstname' => 'Alexandre Gagnon-Girard',
            'lastname' => 'Laforest',
            'address' => '2286 rue bourdeau',
            'zipCode' => 'G1Q1Q7',
            'town' => 'Chicout',
            'country' => 'Canada',
            'email' => 'exemple3@hotmail.com',
            'password' => '12345',
            'privilege' => 2,
        ],
    ];

    /**
     * {@inheritDoc}
     */
    public function findUser($id)
    {
        if (! isset($this->data[$id])) {
            throw new DomainException(sprintf('Post by id "%s" not found', $id));
        }

        $userToReturn = new User();
        $userToReturn.setFirstname($this->data[$id]['firstname']);
        $userToReturn.setLastname($this->data[$id]['lastname']);
        $userToReturn.setAddress($this->data[$id]['address']);
        $userToReturn.setZipCode($this->data[$id]['zipCode']);
        $userToReturn.setTown($this->data[$id]['town']);
        $userToReturn.setCountry($this->data[$id]['country']);
        $userToReturn.setEmail($this->data[$id]['email']);
        $userToReturn.setPassword($this->data[$id]['password']);
        $userToReturn.setPrivilege($this->data[$id]['privilege']);

        return $userToReturn;
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        // TODO: Implement findPost() method.
    }
}