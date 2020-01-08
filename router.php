<?php

define('APP_DIR', dirname(__FILE__) );

/**
 * [Router description]
 */
class Router {
    public function __construct() {
        // getPayload
        $url     = $_SERVER['REQUEST_URI'];
        $packets = explode('/', $url);
        $this->determineDestination($packets);
    }

    /**
     * [determineDestination description]
     *
     * @param  string $packets [description]
     * @return [type]          [description]
     */
    public function determineDestination($packets = '') {
        if(is_array($packets)) {
            // Fallback class when none are given.
            (!$packets[4]) ? $class = 'home' : $class = $packets[4];

            // Fallback method when none are given.
            (!$packets[5]) ? $method = 'index' : $method = $packets[5];

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

        if($method) {
            die(call_user_func_array(array($obj, $method), $params));
        }
    }

    public function __destruct() {
        # code...
    }
}
