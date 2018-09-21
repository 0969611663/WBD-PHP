<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 21/09/2018
 * Time: 10:00
 */

require __DIR__ . '/CURD.php';


class Book extends CURD
{
    public function __construct ()
    {
        parent::__construct();
    }

    public function showBook() {
        $book = parent::show();
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