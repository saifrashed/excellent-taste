<?php
    require_once 'model/GeneralLogic.php';


    class Overzichten {
        public function __construct() {
            $this->GeneralLogic = new GeneralLogic();
        }

        /**
         * Class Overzichten default function
         */
        public function index() {
            include './view/header.php';
            include './view/home.php';
            include './view/footer.php';
        }


        /**
         * Displays kok view
         */
        public function kok() {
            include './view/header.php';
            include './view/overzichten/overzicht_kok.php';
            include './view/footer.php';
        }


        /**
         * Displays barman view
         */
        public function barman() {
            include './view/header.php';
            include './view/overzichten/overzicht_barman.php';
            include './view/footer.php';
        }


        /**
         * Displays ober view
         */
        public function ober() {
            include './view/header.php';
            include './view/overzichten/overzicht_ober.php';
            include './view/footer.php';
        }

        public function __destruct() {
        }
    }

