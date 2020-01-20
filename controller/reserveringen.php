<?php
require_once 'model/Logic.php';


class Home {
    public function __construct() {
        $this->Logic = new Logic();
    }

    public function index() {
        include './view/header.php';
        include './view/home.php';
        include './view/footer.php';
    }

    public function __destruct() {
    }
}

