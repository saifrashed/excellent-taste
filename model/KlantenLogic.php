<?php
    require_once 'model/DataHandler.php';

    /**
     * Class KlantenLogic handles customer business logic
     */
    class KlantenLogic {

        public function __construct() {
            $this->DataHandler = new Datahandler("localhost", "mysql", "excellent_taste", "root", "Rashed112");
        }

        /**
         * Create business logic for a customer
         */
        public function create($firstname, $lastname, $email, $phoneNumber) {
            return $this->DataHandler->createData('INSERT INTO klanten (voornaam, achternaam, email, tel) VALUES("'.$firstname.'","'.$lastname.'","'.$email.'","'.$phoneNumber.'")');
        }

        /**
         * Reads business logic for a customer
         */
        public function reads() {
            return $this->DataHandler->readsData('SELECT * FROM klanten;');
        }

        /**
         * Reads business logic for a customer
         */
        public function read($customerId) {
            return $this->DataHandler->readsData('SELECT * FROM klanten WHERE klant_id=' . $customerId . ';');
        }

        /**
         * Update business logic for a customer
         */
        public function update($reservationId) {

        }

        public function __destruct() {

        }

    }

?>
