<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 25/09/2018
 * Time: 11:45
 */

namespace Model;

use PDO;

class DBConnection
{
    public $dsn;
    public $user;
    public $password;

    public function __construct ($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect ()
    {
        return new PDO($this->dsn, $this->user, $this->password);
    }
}