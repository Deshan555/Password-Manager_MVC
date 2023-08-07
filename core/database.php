<?php
require 'config.php';

class Database{
    private $conn;
    private $db_host;
    private $db_name;
    private $db_port;
    private $db_username;
    private $db_password;

    public function __construct()
    {
        $this->db_host = $GLOBALS['db_host'];
        $this->db_name = $GLOBALS['db_name'];
        $this->db_port = $GLOBALS['db_port'];
        $this->db_username = $GLOBALS['db_username'];
        $this->db_password = $GLOBALS['db_password'];

        try{
            $options = [
                PDO::ATTR_ERRMODE => true,
                PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION
            ];
            $conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;dbport=$this->db_port", $this->db_username, $this->db_password, $options);
            $this->conn = $conn;
            echo "Connected successfully";
        }catch(PDOException $e){
            
            die("Connection Faild : ".$e->getMessage());
        }
    }

    public function query($sql){
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
}