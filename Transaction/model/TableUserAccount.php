<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 26/09/2018
 * Time: 09:47
 */


namespace Model;


class TableUserAccount
{
    public $id;
    public $userName;
    public $passWord;
    public $balance;

    public function __construct ($id, $userName, $passWord, $balance)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->passWord = $passWord;
        $this->balance = $balance;
    }


}