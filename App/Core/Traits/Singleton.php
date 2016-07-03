<?php

namespace App\Core\Traits;

trait Singletone
{
    protected static $instance;

    protected function __construct()
    {}

    protected function __clone()
    {}

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}
