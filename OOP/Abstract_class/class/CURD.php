<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 22:37
 */

require __DIR__ . '/../database/Database.php';

abstract class CURD
{
    protected $conn;
    protected $sql;

    protected function __construct ()
    {
        $database = new Database();
        $this->conn = $database->connect('root', '123456@Abc', 'library_database');
    }

    protected function show ()
    {
        $sql = "SELECT * FROM category ORDER BY id";
        $result = $this->conn->query($sql);
        $categories = $result->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    abstract protected function insert ($name);

    protected function getById ($id)
    {
        $sql = "SELECT * FROM category WHERE id = '$id'";
        $result = $this->conn->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }

    abstract protected function update ($id, $name);

    abstract protected function delete ($id);
}