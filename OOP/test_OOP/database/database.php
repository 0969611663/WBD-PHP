<?php

class Database
{
    private $url = null;
    private $userName = null;
    private $passWord = null;
    public $conn = null;

    public function __construct($user, $passWord, $dbName)
    {
        $this->userName = $user;
        $this->passWord = $passWord;
        $this->url = "mysql:host=127.0.0.1;dbname=$dbName";

        try {
            $conn = new mysqli("127.0.0.1", $this->userName, $this->passWord, $dbName);
            $this->conn = $conn;
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }

    }
}