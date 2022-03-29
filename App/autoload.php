<?php

spl_autoload_register(
    static function ($class) {
        require
            __DIR__ .
            '/' .
            str_replace('\\', '/', substr($class, 4))
            . '.php';
    }
);