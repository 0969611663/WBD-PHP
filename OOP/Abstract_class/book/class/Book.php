<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 21/09/2018
 * Time: 11:38
 */

require __DIR__ . '/../../class_Dad/CURD.php';

class Book extends CURD
{

    public function __construct ()
    {
        parent::__construct();
    }

    public function show ()
    {
        $sql = "  SELECT book.id, book.book_name, book.author, category.category_name
          FROM book
          JOIN category ON book.id_category = category.id";

        $result = $this->conn->query($sql);
        $books = $result->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function getBookById ($id)
    {
        $book = parent::getById('book', $id);
        return $book;
    }

    protected function insert ($name)
    {
        // TODO: Implement insert() method.
    }

    protected function update ($id, $name)
    {
        // TODO: Implement update() method.
    }

    protected function delete ($id)
    {
        // TODO: Implement delete() method.
    }
}