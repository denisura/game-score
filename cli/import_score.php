<?php
use GameScore\Service\Game;

// create_user.php
require_once dirname(__DIR__) . "/config/bootstrap.php";

list($location, $scoreline) = explode(':', $argv[1]);
preg_match_all('/(?P<name>\w+),(?P<score>[-]?\d+)/', $scoreline, $scores);
$game = new Game();
$game->importScores($scores,$location);

echo "Done\n";