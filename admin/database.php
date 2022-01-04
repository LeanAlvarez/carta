<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "c2440492_carta";// c2440492_carta litoralenia
    private static $dbUsername = "c2440492_carta";//  c2440492_carta root
    private static $dbUserpassword = "96BEfugali ";//96BEfugali 
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
