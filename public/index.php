<?php
$basePath = dirname(__DIR__);

require_once '../vendor/autoload.php';
require_once '../vendor/vascomartins/cat/src/Cat/Helpers/helpers.php';

$router = new \Cat\Router\Router(strtok($_SERVER["REQUEST_URI"], '?'));

$app = new \Cat\Kernel\App($basePath);

$app->run($router);