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
        $database = new Database();
        $this->conn = $database->connect('root', '123456@Abc', 'library_database');
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM category ORDER BY id";
        $result = $this->conn->query($sql);
        $categories = $result->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}