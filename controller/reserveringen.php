<?php
    require_once 'model/GeneralLogic.php';
    require_once 'model/ReserveringenLogic.php';
    require_once 'model/KlantenLogic.php';

    /**
     * Class Reserveringen handles reservations
     */
    class Reserveringen {
        public function __construct() {
            $this->GeneralLogic       = new GeneralLogic();
            $this->ReserveringenLogic = new ReserveringenLogic();
            $this->KlantenLogic       = new KlantenLogic();

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
        public function create($customerId = 0) {

            $customerList = $this->KlantenLogic->reads();

            if ($customerId) {

                $customer = $this->KlantenLogic->read($customerId)->fetch(PDO::FETCH_ASSOC);

                if (!empty($_REQUEST['aantal_personen']) && !empty($_REQUEST['datum']) && !empty($_REQUEST['tijd']) && !empty($_REQUEST['tafel_nummer'])) {

                    $amountPersons = $this->GeneralLogic->prepareData($_REQUEST['aantal_personen']);
                    $date          = $this->GeneralLogic->prepareData($_REQUEST['datum']);
                    $time          = $this->GeneralLogic->prepareData($_REQUEST['tijd']);
                    $tableNumber   = $this->GeneralLogic->prepareData($_REQUEST['tafel_nummer']);

                    $reserveringResult = $this->ReserveringenLogic->create($customerId, $amountPersons, $date, $time, $tableNumber);

                    return header('Location: ' . RESERVERINGEN_READ);
                }
            } else {

                $customerId = 0;

                if (!empty($_REQUEST['voornaam']) && !empty($_REQUEST['achternaam']) && !empty($_REQUEST['email']) && !empty($_REQUEST['tel'])) {
                    $firstName   = $this->GeneralLogic->prepareData($_REQUEST['voornaam']);
                    $lastName    = $this->GeneralLogic->prepareData($_REQUEST['achternaam']);
                    $email       = $this->GeneralLogic->prepareData($_REQUEST['email']);
                    $phoneNumber = $this->GeneralLogic->prepareData($_REQUEST['tel']);

                    $klantResult = $this->KlantenLogic->create($firstName, $lastName, $email, $phoneNumber);

                    if (!empty($_REQUEST['aantal_personen']) && !empty($_REQUEST['datum']) && !empty($_REQUEST['tijd']) && !empty($_REQUEST['tafel_nummer'])) {
                        $amountPersons = $this->GeneralLogic->prepareData($_REQUEST['aantal_personen']);
                        $date          = $this->GeneralLogic->prepareData($_REQUEST['datum']);
                        $time          = $this->GeneralLogic->prepareData($_REQUEST['tijd']);
                        $tableNumber   = $this->GeneralLogic->prepareData($_REQUEST['tafel_nummer']);

                        $reserveringResult = $this->ReserveringenLogic->create($klantResult, $amountPersons, $date, $time, $tableNumber);
                    }

                }
//                $reserveringResult = $this->ReserveringenLogic->create();
            }


            include './view/header.php';
            include './view/reserveringen/reserveringen_create.php';
            include './view/footer.php';
        }

        /**
         * Reads a reservation
         */
        public function read() {

            $result = $this->ReserveringenLogic->reads();

            include './view/header.php';
            include './view/reserveringen/reserveringen_read.php';
            include './view/footer.php';
        }

        /**
         * Updates a reservation
         */
        public function update($reservationId) {

            $reservation = $this->ReserveringenLogic->read($reservationId)->fetch(PDO::FETCH_ASSOC);

            if (!empty($_REQUEST['aantal_personen']) && !empty($_REQUEST['datum']) && !empty($_REQUEST['tijd']) && !empty($_REQUEST['tafel_nummer'])) {

                $amountPersons = $this->GeneralLogic->prepareData($_REQUEST['aantal_personen']);
                $date          = $this->GeneralLogic->prepareData($_REQUEST['datum']);
                $time          = $this->GeneralLogic->prepareData($_REQUEST['tijd']);
                $tableNumber   = $this->GeneralLogic->prepareData($_REQUEST['tafel_nummer']);

                $reserveringResult = $this->ReserveringenLogic->update($reservationId, $amountPersons, $date, $time, $tableNumber);

                return header('Location: ' . RESERVERINGEN_READ);
            }

            include './view/header.php';
            include './view/reserveringen/reserveringen_update.php';
            include './view/footer.php';
        }

        /**
         * Delete a reservation
         */
        public function delete($reservationId) {
            $this->ReserveringenLogic->delete($reservationId);

            return header('Location: ' . RESERVERINGEN_READ);
        }

        public function __destruct() {
        }
    }

