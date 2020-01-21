<?php
    require_once 'model/DataHandler.php';

    /**
     * Class GeneralLogic contains functions that do not fit in the other logic classes but are nonetheless important
     */
    class GeneralLogic {

        public function __construct() {
            $this->DataHandler = new Datahandler("localhost", "mysql", "excellent_taste", "root", "Rashed112");
        }


        /**
         * returns articles that is associated with order.
         */
        public function readArtikelen($orderId) {
            return $this->DataHandler->readsData('SELECT * FROM bestellingen NATURAL JOIN bestelling_artikelen NATURAL JOIN artikelen WHERE bestelling_id = ' . $orderId . ';');
        }

        /**
         * Calculates total price of articles.
         *
         * @param $orderId
         * @return float|int
         */
        public function sumArtikelen($orderId) {
            $result = $this->DataHandler->readsData('SELECT * FROM bestellingen NATURAL JOIN bestelling_artikelen NATURAL JOIN artikelen WHERE bestelling_id = ' . $orderId . ';');
            $totaal = 0;

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $som    = $row['prijs'] * $row['aantal'];
                $totaal = $totaal + $som;
            }

            return $totaal;
        }

        /**
         * Returns a table in HTML to be used as menu card to make an order.
         *
         * @param $orderId
         * @return string
         */
        public function menukaart($orderId) {
            $artikelSoorten = $this->DataHandler->readsData('SELECT DISTINCT * FROM artikel_soorten')->fetchAll();

            $html = '<table class="table">';
            $html .= '<tr>';
            $html .= '<th>Menu soort</th>';
            $html .= '<th>Menu type</th>';
            $html .= '<th>Gerecht</th>';
            $html .= '</tr>';

            foreach ($artikelSoorten as $artikelSoortenKey => $artikelSoortenValue) {

                $html         .= '<tr><td colspan="4">' . $artikelSoortenValue['omschrijving'] . '</td></tr>';
                $artikelTypes = $this->DataHandler->readsData('SELECT DISTINCT * FROM artikel_types WHERE artikelsoort_id = ' . $artikelSoortenValue["artikelsoort_id"] . '')->fetchAll();

                foreach ($artikelTypes as $artikelTypeKey => $artikelTypeValue) {

                    $html      .= '<tr><td colspan="1"><td colspan="3">' . $artikelTypeValue['omschrijving'] . '</td></tr>';
                    $artikelen = $this->DataHandler->readsData('SELECT DISTINCT * FROM artikelen WHERE artikeltype_id = ' . $artikelTypeValue["artikeltype_id"] . '')->fetchAll();

                    foreach ($artikelen as $artikelKey => $artikelValue) {
                        $html .= '<tr><td colspan="2"></td>';
                        $html .= '<td><a class="btn btn-primary" href="' . BESTELLINGEN_UPDATE . '/' . $orderId . '/' . $artikelValue['artikel_id'] . '">' . $artikelValue['omschrijving'] . '</a></td>';
                        $html .= '</tr>';
                    }
                }
            }

            $html .= '</table>';

            return $html;
        }

        public function __destruct() {

        }

    }

?>
