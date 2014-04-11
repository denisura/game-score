<?php
use GameScore\Service\Opponent;

// create_user.php
require_once dirname(__DIR__) . "/config/bootstrap.php";

$name = $argv[1];

$opponent = new Opponent ();

echo "Created Opponent with ID " . $opponent->getOpponentByName($name)->getOpponentId() . "\n";