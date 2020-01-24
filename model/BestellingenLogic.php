<?php
require_once 'model/DataHandler.php';

/**
 * Class BestellingenLogic handles orders business logic
 */
class BestellingenLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "excellent_taste", "root", "Rashed112");
    }

    /**
     * Create business logic for a order
     */
    public function create($tableNumber, $date, $time) {
       return $this->DataHandler->createData('INSERT INTO bestellingen (tafel_nummer, datum_aangemaakt, tijd) VALUES ("'.$tableNumber.'", "'.$date.'", "'.$time.'");');
    }

    /**
     * Reads business logic for a order
     */
    public function reads() {
        return $this->DataHandler->readsData('SELECT * FROM bestellingen ORDER BY bestelling_id DESC;');
    }

    /**
     * Reads business logic for a order
     */
    public function read($orderId) {
        return $this->DataHandler->readsData('SELECT * FROM bestellingen WHERE bestelling_id='.$orderId.';');
    }

    /**
     * Update business logic for a order
     */
    public function update($orderId, $articleId) {
        $result = $this->DataHandler->readData('SELECT * FROM bestelling_artikelen WHERE bestelling_id="'.$orderId.'" AND artikel_id="'.$articleId.'";')->rowCount();

        if(!$result) {
            return $this->DataHandler->createData('INSERT INTO bestelling_artikelen (bestelling_id, artikel_id, aantal) VALUES("'.$orderId.'", "'.$articleId.'", "1")');
        } else {
            return $this->DataHandler->updateData('UPDATE bestelling_artikelen SET aantal=aantal + 1 WHERE bestelling_id="'.$orderId.'" AND artikel_id="'.$articleId.'";');
        }
    }

    public function __destruct() {

    }

}

?>
