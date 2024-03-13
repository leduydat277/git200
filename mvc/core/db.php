<?php
class db {
    protected $HOST = 'localhost';
    protected $DB = 'thi_thu1';
    protected $USER = 'root';
    protected $PASS = '';
    protected $con;

    function __construct(){
        try {
            $dsn = "mysql:host={$this->HOST};dbname={$this->DB}";
            $this->con = new PDO($dsn, $this->USER, $this->PASS);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}



?>