<?php

class Database{
    private $connection;
    private static $instance;
    private $host = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $database = DB_NAME;

    private function __construct()
    {
        try{
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database",
                $this->username, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $ex){
            die($ex->getMessage());
        }
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
        // empty to prevent duplication of the connection
    }

    public function getConnection(){
        return $this->connection;
    }
}