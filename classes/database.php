<?php

class Database {
   private static $db;

   public static function getConnection() {
       if (self::$db == null) {
           self::$db = new PDO("mysql:host=centerbeam.proxy.rlwy.net;port=30899;dbname=railway", 
           "root",
            "kpyvDzJDdvOGGFwvoYwjvToaWHcyepEM");
       }

       return self::$db;
   }
}