<?php
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;
use Application\Entity\User;

class UserRepository extends EntityRepository
{
    /**
     * {@inheritDoc}
     */
    public function findUser($id)
    {

    }
}