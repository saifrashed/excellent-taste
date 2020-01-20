<?php
require_once 'model/GeneralLogic.php';


class Home {
    public function __construct() {
        $this->GeneralLogic = new GeneralLogic();
    }

    public function index() {
        include './view/header.php';
        include './view/home.php';
        include './view/footer.php';
    }

    public function __destruct() {
    }
}

