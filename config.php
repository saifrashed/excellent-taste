<?php


    define('APP_DIR', dirname(__FILE__));

    // Paths
    define('BASE_URL', 'http://localhost/projecten/mvc_excellent_taste');

    // reserveringen
    define('RESERVERINGEN_READ', BASE_URL . '/reserveringen/read');
    define('RESERVERINGEN_CREATE', BASE_URL . '/reserveringen/create');
    define('RESERVERINGEN_UPDATE', BASE_URL . '/reserveringen/update');
    define('RESERVERINGEN_DELETE', BASE_URL . '/reserveringen/delete');

    // Bestellingen
    define('BESTELLINGEN_READ', BASE_URL . '/bestellingen/read');
    define('BESTELLINGEN_CREATE', BASE_URL . '/bestellingen/create');
    define('BESTELLINGEN_UPDATE', BASE_URL . '/bestellingen/update');
    define('BESTELLINGEN_DELETE', BASE_URL . '/bestellingen/delete');

    // overzichten
    define('OVERZICHTEN_KOK', BASE_URL . '/overzichten/kok');
    define('OVERZICHTEN_BARMAN', BASE_URL . '/overzichten/barman');
    define('OVERZICHTEN_OBER', BASE_URL . '/overzichten/ober');


?>
