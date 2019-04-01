<?php
if(!defined("_CONFIG_")){
    exit("SOmething went wrong");
}

class db{

    protected static $con;
    private function __construct()
    {
        try {
            self::$con = pdo('mysql:charset=utf8mb4;host:localhost;port:3306;dbname=login_system', 'root', 'root');
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        }
        catch (PDOException $e){
            echo "Could not connect to database.";
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

