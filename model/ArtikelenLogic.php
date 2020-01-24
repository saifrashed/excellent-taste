<?php
    require_once 'model/DataHandler.php';

    /**
     * Class ArtikelenLogic handles orders business logic
     */
    class ArtikelenLogic {

        public function __construct() {
            $this->DataHandler = new Datahandler("localhost", "mysql", "excellent_taste", "root", "Rashed112");
        }

        /**
         * Create business logic for a article
         */
        public function create() {

        }

        /**
         * Reads business logic for a article
         */
        public function reads() {
            return $this->DataHandler->readsData('SELECT * FROM artikelen;');
        }

        /**
         * Reads business logic for a article
         */
        public function read($articleId) {
            return $this->DataHandler->readsData('SELECT * FROM artikelen WHERE artikel_id=' . $articleId . ';');
        }

        /**
         * Update business logic for a article
         */
        public function update($articleId) {

        }

        /**
         * Delete business logic for a article
         */
        public function delete($articleId) {
            return $this->DataHandler->deleteData('DELETE FROM artikelen WHERE artikel_id=' . $articleId . ';');
        }

        public function __destruct() {

        }

    }

?>
