<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 25/09/2018
 * Time: 11:44
 */

namespace Controller;

use \model\DBConnection;
use \model\PostDB;
use \model\Post;


class PostController
{
    public $postDB;

    public function __construct ()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=blog_database", "root", "123456@Abc");
        $this->postDB = new PostDB($connection->connect());
    }

    public function index ()
    {
        $posts = $this->postDB->getAll();
        include "View/list.php";
    }

}

