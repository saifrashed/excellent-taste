<?php
require_once 'model/DataHandler.php';

class Logic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "werelddelen", "root", "Rashed112");
    }

    public function __destruct() {

    }

}

?>
