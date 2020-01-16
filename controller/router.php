<?php

/**
 * Application router class determines use of controller
 */
class Router {

    public function __construct() {
        $url     = $_SERVER['REQUEST_URI'];
        $packets = explode('/', $url);
        $this->determineDestination($packets);
    }

    /**
     * Determines location from explodes URL
     *
     * @param  string $packets
     * @return
     */
    public function determineDestination($packets = '') {

        if (is_array($packets)) {

            $packetClass = $packets[4];
            $packetMethod     = $packets[5];

            // Fallback class when none are given.
            (!$packetClass) ? $class = 'home' : $class = $packetClass;

            // Fallback method when none are given.
            (!$packetMethod) ? $method = 'index' : $method = $packetMethod;

            // Offset the packets until parameters are given.
            $params = array_slice($packets, 6);

            $this->sendToDestination($class, $method, $params);
        }
    }

    /**
     *
     *
     * @param  [type] $classname [description]
     * @param  [type] $method    [description]
     * @param  [type] $params    [description]
     * @return [type]            [description]
     */
    public function sendToDestination($classname, $method, $params) {
        $class = APP_DIR . '/controller/' . $classname . '.php';
        require_once($class);
        // Create object and call method
        $obj = new $classname;

        if ($method) {
            die(call_user_func_array(array($obj, $method), $params));
        }
    }

    public function __destruct() {
        # code...
    }
}
