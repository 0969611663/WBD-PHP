<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 17/09/2018
 * Time: 17:41
 */

class Database {
    private $url = null;
    private $userName = null;
    private $passWord = null;

    public function connect($user, $passWord, $dbName) {
        $this->userName = $user;
        $this->passWord = $passWord;
        $this->url = "mysql:host=localhost,dbname=$dbName";

        try {
            $conn = new PDO($this->url, $this->userName, $this->passWord);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "connection failed". $e->getMessage();
        }
        return null;
    }
}