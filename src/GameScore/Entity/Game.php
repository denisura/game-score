<?php

namespace GameScore\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 */
class Game
{
    /**
     * @var integer
     */
    private $game_id;

    /**
     * @var string
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gameScore;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gameScore = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set location
     *
     * @param string $location
     * @return Game
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add gameScore
     *
     * @param \GameScore\Entity\GameScore $gameScore
     * @return Game
     */
    public function addGameScore(\GameScore\Entity\GameScore $gameScore)
    {
        $this->gameScore[] = $gameScore;

        return $this;
    }

    /**
     * Remove gameScore
     *
     * @param \GameScore\Entity\GameScore $gameScore
     */
    public function removeGameScore(\GameScore\Entity\GameScore $gameScore)
    {
        $this->gameScore->removeElement($gameScore);
    }

    /**
     * Get gameScore
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGameScore()
    {
        return $this->gameScore;
    }
}
