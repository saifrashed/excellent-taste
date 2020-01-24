<?php
    require_once 'model/DataHandler.php';

    /**
     * Class ReserveringenLogic handles reservation business logic
     */
    class ReserveringenLogic {

        public function __construct() {
            $this->DataHandler = new Datahandler("localhost", "mysql", "excellent_taste", "root", "Rashed112");
        }

        /**
         * Create business logic for a reservation
         */
        public function create($customerId, $amountPersons, $date, $time, $tableNumber) {
            return $this->DataHandler->createData('INSERT INTO reservering (klant_id, aantal_personen, datum, tijd, tafel_nummer) VALUES("'.$customerId.'","'.$amountPersons.'","'.$date.'","'.$time.'","'.$tableNumber.'")');
        }

        /**
         * Reads business logic for a reservation
         */
        public function reads() {
            return $this->DataHandler->readsData('SELECT * FROM reservering NATURAL JOIN klanten ORDER BY datum DESC;');
        }

        /**
         * Reads business logic for a reservation
         */
        public function read($reservationId) {
            return $this->DataHandler->readsData('SELECT * FROM reservering NATURAL JOIN klanten WHERE reservering_id=' . $reservationId . ';');
        }

        /**
         * Update business logic for a reservation
         */
        public function update($reservationId, $amountPersons, $date, $time, $tableNumber) {
            return $this->DataHandler->updateData(' UPDATE reservering SET aantal_personen="'.$amountPersons.'", datum="'.$date.'", tijd="'.$time.'", tafel_nummer="'.$tableNumber.'" WHERE reservering_id='.$reservationId.' ;');
        }

        /**
         * Delete business logic for a reservation
         */
        public function delete($reservationId) {
            return $this->DataHandler->deleteData('DELETE FROM reservering WHERE reservering_id=' . $reservationId . ';');
        }

        public function __destruct() {

        }

    }

?>
