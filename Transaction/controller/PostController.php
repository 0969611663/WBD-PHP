<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 26/09/2018
 * Time: 09:46
 */

namespace Controller;


use Model\Database;
use Model\PostDB;

class PostController
{
    public $postDB;

    public function __construct ()
    {
        $database = new Database();
        $this->postDB = new PostDB($database->connect());
    }

    public function index ()
    {
        $posts = $this->postDB->getUserAccount();
        include "view/listUserAccount.php";
    }

    public function tableTransaction () {
        $trans = $this->postDB->getTransactionHistory();
        include "view/listTransaction.php";
    }

    public function getId ()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $post = $this->postDB->getById($id);

            if (!$post) {
                echo "Thể loại không tồn tại";
                die();
            }
        }
        $posts = $this->postDB->getUserAccount();
        include "view/add.php";
    }

    public function transfers(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/add.php';
        } else {
            $dateTime = date('Y-m-d H:i:s');
            if ( isset($_GET['id'])) {
                $targetId = $_GET['id'];
                $amount = $_POST['amount'];
                $sourceId = $_POST['sourceId'];
                $content = $_POST['content'];
                $this->postDB->create($targetId, $amount, $sourceId, $dateTime, $content);
                header('Location: index.php?page=tableTransaction');
            }
        }
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include "login.php";
        } else {
            $account = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $this->postDB->check($account, $passWord);
        }


    }


}

