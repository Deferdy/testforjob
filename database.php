<?php
            
class Database                   
{
    private static $dbHost = "localhost:3308";
    private static $dbName = "exercice";
    private static $dbUsername ="root";
    private static $dbUserpassword ="";
    
    private static $connection = null;

    public static function connect()  
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName.";charset=utf8" , self::$dbUsername, self::$dbUserpassword);


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

?>ы