<?php

class Database {
   private static $db;

   public static function getConnection() {
       if (self::$db == null) {
           self::$db = new PDO("mysql:host=localhost;port=3306;dbname=webshop", "root", "");
       }

       return self::$db;
   }
}