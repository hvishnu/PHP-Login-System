<?php
if(!defined("_CONFIG_")){
    exit("SOmething went wrong");
}

class db{

    protected static $con;
    private function __construct()
    {
        try {
            self::$con = new pdo('mysql:charset=utf8mb4;host:localhost;port:3306;dbname=login_system', 'hvishnu', 'Rahul@123');
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        }
        catch (PDOException $e){

            echo "could not connect to database $e.";
            exit;

        }

    }
public static function getConnection() {

    if (!self::$con) {
        new DB();
    }

    return self::$con;
}
}

?>

