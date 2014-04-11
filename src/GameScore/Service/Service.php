<?php

namespace GameScore\Service;

use Doctrine\ORM\EntityManagerInterface;


/**
 */
class Service
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    protected static $em;

    /**
     * Get EntityManager
     *
     * @return \Doctrine\ORM\EntityManagerInterface
     */
    public static function getEntityManager()
    {
        return self::$em;
    }

    /**
     * Set EntityManager
     */
    public static function setEntityManager(\Doctrine\ORM\EntityManagerInterface $em)
    {
        self::$em = $em;
    }
}
