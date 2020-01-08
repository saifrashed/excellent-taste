<?php
include 'config.php';

require_once 'router.php';

$router = new Router();
$router->determineDestination();
