<?php
class Database
{
    static $db = null;
    public static function getConnection()
    {
        if (self::$db == null) {
            self::$db = new PDO("mysql:host=mariadb;dbname=mira", "root", "root");
        }
        return self::$db;
    }

    function closeConnection()
    {
        self::$db = null;
    }
}