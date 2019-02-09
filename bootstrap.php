<?php

use Doctrine\ORM\Tool\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a Default Doctrine ORM configuration for annotations
$isDevMode = true;

$config = Setup::createAnnotationMetaDataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
    'driver' => "pdo_sqlite",
    'path' => '/db.sqlite',
);

// obtainig the entity Manager
$entityManager= EntityManager::create($conn, $config);