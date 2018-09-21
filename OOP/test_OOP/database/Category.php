<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 14:42
 */

require "database.php";

class Category
{
    public $conn;

    public function __construct()
    {
        $database = new Database('root', '123456@Abc', 'library_database');
        $this->conn = $database->conn;
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM category ORDER BY id";
        $result = $this->conn->query($sql);

        $resultArray = [];
        while($row = $result->fetch_assoc()) {
            $resultArray[] = $row;
        }
        return $resultArray;
   }

}