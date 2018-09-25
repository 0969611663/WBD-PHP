<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 25/09/2018
 * Time: 11:46
 */

namespace Model;


class PostDB
{
    public $connection;

    public function __construct ($connection)
    {
        $this->connection = $connection;
    }

//    public function create ($post)
//    {
//        $sql = "INSERT INTO `posts`(`title`, `teaser`, `content`, `created`) VALUES (?, ?, ?, ?)";
//        $statement = $this->connection->prepare($sql);
//        $statement->bindParam(1, $post->title);
//        $statement->bindParam(2, $post->teaser);
//        $statement->bindParam(3, $post->content);
//        $statement->bindParam(4, $post->created);
//        return $statement->execute();
//    }


//        $sql = "SELECT * FROM `posts` WHERE `id` = ?";
//        $statement = $this->connection->prepare($sql);
//        $statement->bindParam(1, $id);
//        $statement->execute();
//        $row = $statement->fetch();
//        $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
//        $post->id = $row['id'];
//        return $post;
//    }

    public function getAll ()
    {
        $sql = "SELECT * FROM `posts`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }

}