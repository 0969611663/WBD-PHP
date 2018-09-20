<?php

class Database
{
    private $url = null;
    private $userName = null;
    private $passWord = null;

    public function connect($user, $passWord, $dbName)
    {
        $this->userName = $user;
        $this->passWord = $passWord;
        $this->url = "mysql:host=localhost;dbname=$dbName";

        try {
            $conn = new PDO($this->userName, $this->passWord, $this->url);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "connection failed" . $e->getMessage();
        }
        return null;
    }
}