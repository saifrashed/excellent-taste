<?php
require_once 'model/GeneralLogic.php';

/**
 * Class Reserveringen handles reservations
 */
class Reserveringen {
    public function __construct() {
        $this->GeneralLogic = new GeneralLogic();
    }

    /**
     * Class Reserveringen default function
     */
    public function index() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_read.php';
        include './view/footer.php';
    }

    /**
     * Creates a reservation
     */
    public function create() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_create.php';
        include './view/footer.php';
    }

    /**
     * Reads a reservation
     */
    public function read() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_read.php';
        include './view/footer.php';
    }

    /**
     * Updates a reservation
     */
    public function update() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_update.php';
        include './view/footer.php';
    }

    /**
     * Delete a reservation
     */
    public function delete() {
        include './view/header.php';
        include './view/reserveringen/reserveringen_delete.php';
        include './view/footer.php';
    }

    public function __destruct() {
    }
}

