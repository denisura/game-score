<?php

namespace GameScore\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opponent
 */
class Opponent
{
    /**
     * @var integer
     */
    private $opponent_id;

    /**
     * @var string
     */
    private $name;

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
     * Get opponent_id
     *
     * @return integer 
     */
    public function getOpponentId()
    {
        return $this->opponent_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Opponent
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add gameScore
     *
     * @param \GameScore\Entity\GameScore $gameScore
     * @return Opponent
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
