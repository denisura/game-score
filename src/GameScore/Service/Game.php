<?php

namespace GameScore\Service;

use GameScore\Entity;

/**
 * Person
 */
class Game extends Service
{
    /**
     * Import gmae scores
     *
     * @param array $scores
     * @param string $location
     * @return integer
     */
    public function importScores($scores, $location)
    {
        if (!isset($scores['name']) ||
            !isset($scores['score'])
        ) {
            return;
        }
        $game = new Entity\Game();
        $game->setLocation($location);
        $this->getEntityManager()->persist($game);
        $this->getEntityManager()->flush();

        foreach ($scores['name'] as $key => $name) {
            $opponent = new Opponent();
            $gameScore = new Entity\GameScore();
            $gameScore->setGameId($game->getGameId());
            $gameScore->setOpponentId($opponent->getOpponentByName($name)->getOpponentId());
            $gameScore->setScore($scores['score'][$key]);
            $gameScore->setOpponent($opponent->getOpponentByName($name));
            $gameScore->setGame($game);
            $this->getEntityManager()->persist($gameScore);
        }
        $this->getEntityManager()->flush();
    }
}

