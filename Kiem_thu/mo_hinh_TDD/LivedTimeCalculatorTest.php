<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 12/09/2018
 * Time: 11:15
 */

use PHPUnit\Framework\TestCase;

require_once "LivedTime.php";

class LivedTimeCalculatorTest extends TestCase
{
    function testTimeNull()
    {
        $time = "";
        $output = "Thoi gian trong roi!";
        $actual = LivedTime::getLiveHouse($time);
        $this->assertEquals($output, $actual);
    }

    function testPassTheTime() {
        $today = date("Y-m-d");
        $time = strtotime(date("Y-m-d", strtotime($today)). "+1 week");
        $output = "Vuot qua thoi gian hien tai roi!";
        $actual = LivedTime::getLiveHouse($time);
        $this->assertEquals($output, $actual);
    }

    function falseSyntax() {

    }
}