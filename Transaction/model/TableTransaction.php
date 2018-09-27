<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 26/09/2018
 * Time: 22:10
 */

namespace Model;


class TableTransaction
{
    public $id;
    public $targetId;
    public $sourceId;
    public $amount;
    public $content;
    public $dateTime;
    public $success;

    public function __construct ($id, $targetId, $sourceId, $amount, $content, $dateTime, $success)
    {
        $this->id = $id;
        $this->targetId = $targetId;
        $this->sourceId = $sourceId;
        $this->amount = $amount;
        $this->content = $content;
        $this->dateTime = $dateTime;
        $this->success = $success;
    }


}