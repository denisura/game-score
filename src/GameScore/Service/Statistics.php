<?php

namespace GameScore\Service;

use GameScore\Entity;

/**
 */
class Statistics extends Service
{
    /**
     * Gets Ranking list for all opponents
     *
     * @return array
     */
    public function getRankingList()
    {
        $entityManager = self::getEntityManager();
        $sql = "
        SELECT o.name,
                 SUBSTRING_INDEX(
                    GROUP_CONCAT( g.location  ORDER BY game_id DESC),
                    ',',1
                ) last_location,
               SUM(gs.score) as total
          FROM game_score gs
            RIGHT JOIN opponent o USING(opponent_id)
            LEFT JOIN game g using (game_id)
        GROUP BY opponent_id
    ";
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

