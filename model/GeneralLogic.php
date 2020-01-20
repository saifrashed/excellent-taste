<?php
require_once 'model/DataHandler.php';

class GeneralLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "excellent_taste", "root", "Rashed112");
    }

    public function __destruct() {

    }

}

?>
