<?php

class Database
{
    private static $host = "mysql";
    private static $dbname = "mydb";
    private static $username = "root";
    private static $password = "";
    private static $conn = null;

    public static function getConnection(){
        if (self::$conn == null){
          try {
              self::$conn = new PDO(
                  "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                  self::$username,
                  self::$password
              );
              self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch(PDOException $e){
              die("Error while connecting to the database: " . $e->getMessage());
          }
        }
        return self::$conn;
    }
}


?>