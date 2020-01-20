<?php
    require_once 'model/GeneralLogic.php';
    require_once 'model/BestellingenLogic.php';

    /**
     * Class Bestellingen handles orders.
     */
    class Bestellingen {

        public function __construct() {
            $this->GeneralLogic      = new GeneralLogic();
            $this->BestellingenLogic = new BestellingenLogic();
        }

        /**
         * Class Bestelling default function
         */
        public function index() {
            include './view/header.php';
            include './view/bestellingen/bestelling_read.php';
            include './view/footer.php';
        }

        /**
         * Creates a order
         */
        public function create() {

            include './view/header.php';
            include './view/bestellingen/bestelling_create.php';
            include './view/footer.php';
        }

        /*
         * Reads a order
         */
        public function read() {

            $result = $this->BestellingenLogic->reads();

            include './view/header.php';
            include './view/bestellingen/bestelling_read.php';
            include './view/footer.php';
        }

        /*
         * Updates a order
         */
        public function update($orderId, $articleId = FALSE) {

            if($articleId) {
                $this->BestellingenLogic->update($orderId, $articleId);
            }

            $bestelling = $this->BestellingenLogic->read($orderId)->fetch(PDO::FETCH_ASSOC);
            $totaal     = $this->GeneralLogic->sumArtikelen($orderId);
            $artikelen  = $this->GeneralLogic->readArtikelen($orderId);
            $menukaart  = $this->GeneralLogic->menukaart($orderId);

            include './view/header.php';
            include './view/bestellingen/bestelling_update.php';
            include './view/footer.php';
        }

        /*
         * Deletes a order
         */
        public function delete($orderId) {

            $result = $this->BestellingenLogic->delete($orderId);

            include './view/header.php';
            include './view/bestellingen/bestelling_delete.php';
            include './view/footer.php';
        }

        public function __destruct() {
        }
    }

