<?php

require "Model/DBConnection.php";
require "Model/PostDB.php";
require "Model/Post.php";
require "Controller/PostController.php";

use \Controller\PostController;
?>


<html>
<head>
    <meta charset="utf-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="">My Blog</a>
    </div>
    <?php
    $controller = new \controller\PostController();
    $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;

    switch ($page){
        case 'add':
            break;
        case 'View':
            break;
        case 'delete':
            break;
        case 'edit':
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>
</body>
</html>
