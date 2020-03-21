<?php

include 'config.php';
require_once './controller/router.php';

$router = new Router();
$router->determineDestination();

