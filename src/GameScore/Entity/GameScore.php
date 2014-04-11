<?php

namespace GameScore\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameScore
 */
class GameScore
{
    /**
     * @var integer
     */
    private $opponent_id;

    /**
     * @var integer
     */
    private $game_id;

    /**
     * @var integer
     */
    private $score;

    /**
     * @var \GameScore\Entity\Opponent
     */
    private $opponent;

    /**
     * @var \GameScore\Entity\Game
     */
    private $game;


    /**
     * Set opponent_id
     *
     * @param integer $opponentId
     * @return GameScore
     */
    public function setOpponentId($opponentId)
    {
        $this->opponent_id = $opponentId;

        return $this;
    }

    /**
     * Get opponent_id
     *
     * @return integer 
     */
    public function getOpponentId()
    {
        return $this->opponent_id;
    }

    /**
     * Set game_id
     *
     * @param integer $gameId
     * @return GameScore
     */
    public function setGameId($gameId)
    {
        $this->game_id = $gameId;

        return $this;
    }

    /**
     * Get game_id
     *
     * @return integer 
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return GameScore
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set opponent
     *
     * @param \GameScore\Entity\Opponent $opponent
     * @return GameScore
     */
    public function setOpponent(\GameScore\Entity\Opponent $opponent)
    {
        $this->opponent = $opponent;

        return $this;
    }

    /**
     * Get opponent
     *
     * @return \GameScore\Entity\Opponent 
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * Set game
     *
     * @param \GameScore\Entity\Game $game
     * @return GameScore
     */
    public function setGame(\GameScore\Entity\Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \GameScore\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }
}
