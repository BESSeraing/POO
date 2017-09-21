<?php

/**
 * Created by PhpStorm.
 * User: demo
 * Date: 21/09/17
 * Time: 13:59
 */
class DBConfig
{
    const DB_NAME = "poo2017_2018";
    const DB_USER = "root";
    const DB_PASS = "root";
    const DB_HOST = "localhost";

    /**
     * @var PDO
     */
    private static $con;
    
    private static function getPDOConnection($debugMode = true){
        
        self::$con = new PDO('mysql:dbname='.self::DB_NAME.';host='.self::DB_HOST,self::DB_USER,self::DB_PASS);
        if ($debugMode){
            self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        
        
        
    }
    
    public static function getConnection($debugMode = true){
        if (self::$con === null){
            self::getPDOConnection($debugMode);
        }
        
        return self::$con;
    }

}