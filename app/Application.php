<?php

namespace App;

class Application
{
    private static $instance;

    private $valami;

    function __construct()
    {
        $this->valami = new RegisterController();
    }

    public function start() {

    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
