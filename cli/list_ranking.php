<?php
use GameScore\Service\Statistics;

// create_user.php
require_once dirname(__DIR__) . "/config/bootstrap.php";

$stats = new Statistics();
$records = $stats->getRankingList();

echo 'name:last location:total' . PHP_EOL;
foreach ($records as $record) {
    echo $record['name'] . ": ". $record['last_location'].'; Score:' . $record['total'] . PHP_EOL;
}
