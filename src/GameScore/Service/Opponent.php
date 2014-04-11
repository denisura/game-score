<?php

namespace GameScore\Service;

use GameScore\Entity;

/**
 * Person
 */
class Opponent extends Service
{
    /**
     * Gets Opponent Id By Name if one exists or creates new one
     *
     * @param string $name
     * @return integer
     */
    public function getOpponentByName($name)
    {
        $entityManager = self::getEntityManager();
        $opponent = $entityManager->getRepository('GameScore\Entity\Opponent')
            ->findOneBy(array('name' => $name));

        if ($opponent === NULL) {
            $opponent = new Entity\Opponent();
            $opponent->setName($name);

            $entityManager->persist($opponent);
            $entityManager->flush();
        }
        return $opponent;
    }
}

