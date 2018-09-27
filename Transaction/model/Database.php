<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 26/09/2018
 * Time: 09:47
 */

namespace Model;

use PDO;
use PDOException;

class Database
{
    private $url;
    private $userName;
    private $passWord;
    public $conn;

    public function connect ()
    {
        $this->url = "mysql:host=localhost;dbname=bank_database";
        $this->userName = "root";
        $this->passWord = "123456@Abc";
        $this->conn = null;

        try {
            $this->conn = new PDO($this->url, $this->userName, $this->passWord);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "connection failed" . $e->getMessage();
        }
        return $this->conn;
    }
}