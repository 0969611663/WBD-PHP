<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 12/09/2018
 * Time: 11:13
 */
//$today = date('Y-m-d');
//echo "to day" . $today;
//$day1 = date("2018/09/11");
//
//$liveTime = strtotime($today) -

class LivedTime
{
    public function getLiveHouse($time)
    {
        if ($time == null) {
            return "Thoi gian trong roi!";
        }

        $today = date("Y-m-d");
        if ($today < $time) {
            return "Vuot qua thoi gian hien tai roi!";
        }


        return "";
    }
}