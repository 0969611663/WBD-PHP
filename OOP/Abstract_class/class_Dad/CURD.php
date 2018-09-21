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
    protected $table;

    protected function __construct ()
    {
        $database = new Database();
        $this->conn = $database->connect('root', '123456@Abc', 'library_database');
    }

    protected function show ($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id";
        $result = $this->conn->query($sql);
        $categories = $result->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

        protected function getById ($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $result = $this->conn->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }

    abstract protected function insert ($name);

    abstract protected function update ($id, $name);

    abstract protected function delete ($id);
}