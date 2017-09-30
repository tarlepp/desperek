<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * Class SomeService
 *
 * @package AppBundle\Services
 */
class SomeService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * SomeService constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        $this->em->isOpen();
    }
}
