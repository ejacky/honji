<?php

namespace Honji\Core;

use ORM;

class DB
{
    protected static $instance;

    public static function getInstance($tableName)
    {
        if (is_null(self::$instance[$tableName])) {
            $pdo = DB_DRIVE . ':' . 'host=' . DB_HOSTNAME . ';dbname=' . DB_NAME;
            ORM::configure($pdo);
            ORM::configure('username', DB_USERNAME);
            ORM::configure('password', DB_PASSWORD);
            self::$instance[$tableName] = ORM::for_table($tableName);
        }

        return self::$instance[$tableName];
    }
}