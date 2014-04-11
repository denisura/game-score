<?php
/**
 * bootstrap.php
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use GameScore\Service;

chdir(dirname(__DIR__));

require_once "vendor/autoload.php";

$isDevMode = true;
$paths = array("config/yaml");
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);

// database configuration parameters
$connectionOptions = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'gamescore',
    'user'     => 'root',
    'password' => '',
    'charset'  => 'utf8',
    'driverOptions' => array(
        PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'
    )
);

// obtaining the entity manager
$entityManager = EntityManager::create($connectionOptions, $config);

Service\Opponent::setEntityManager($entityManager);
Service\Game::setEntityManager($entityManager);