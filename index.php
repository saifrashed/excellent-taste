<?php
include 'view/header.php';
require_once 'controller/Controller.php';

$controller = new Controller();
$controller->handleRequest();

include 'view/footer.php';
