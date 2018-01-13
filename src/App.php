<?php

namespace TestApp;

use TestApp\Logger;
use Pimple\Container;

class App {

    private static $container = null;

    public static function Bootstrap() {

        if (self::$container !== null) {
            // Log
            return;
        }

        Logger::log('--- bootstraping');

        // Init Container
        self::$container = new Container();
        self::$container['app_name'] = 'default-app';

        // Register Services

    }

    public static function getContainer(): Container {
        return self::$container;
    }

    public static function get(String $service) {
        return self::$container[$service];
    }

}