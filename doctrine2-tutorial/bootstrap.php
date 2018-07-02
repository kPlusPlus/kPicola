<?php 
 error_reporting( E_ALL );
// bootstrap.php
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;



// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$paths = array("/path/to/entity-files");

$dbParams = array(
	'driver' => 'pdo_mysql',
	'user'	=>	'kreso',
	'password' => 'kreso1005',
	'dbname'	=> 'sakila',
);

$paths = array("/path/to/xml-mappings");
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
//$entityManager = EntityManager::create($conn, $config);

$entityManager = EntityManager::create($dbParams, $config);
 ?>