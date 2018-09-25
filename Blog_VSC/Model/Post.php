<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 25/09/2018
 * Time: 11:45
 */

namespace Model;


class Post
{
    public $id;
    public $title;
    public $teaser;
    public $content;
    public $created;

    public function __construct ($title, $teaser, $content, $created)
    {
        $this->title = $title;
        $this->teaser = $teaser;
        $this->content = $content;
        $this->created = $created;
    }
}