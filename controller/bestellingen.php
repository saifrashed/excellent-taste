<?php
require_once 'model/Logic.php';


class Reserveringen {
    public function __construct() {
        $this->Logic = new Logic();
    }

    public function index() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_read.php';
        include './view/footer.php';
    }

    public function create() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_create.php';
        include './view/footer.php';
    }

    public function read() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_read.php';
        include './view/footer.php';
    }

    public function update() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_update.php';
        include './view/footer.php';
    }

    public function delete() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_delete.php';
        include './view/footer.php';
    }

    public function __destruct() {
    }
}

