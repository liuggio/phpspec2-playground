<?php

namespace PHPSpec2Playground\Singleton;

class Singleton
{
    private static $instance;

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
}
