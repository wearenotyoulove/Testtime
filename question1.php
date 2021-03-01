<?php
/**
 * Created by PhpStorm.
 * User: 15757300401@163.com
 * Name: duyuling
 * Date: 2021/03/01
 * Time: 13:28
 */

namespace MyGreeter;
class Client{
    public $instance;//当前类实例
    //构造函数
    public function __construct()
    {

    }
    /*
     * $timestamp 默认当前时间戳
     * return 返回提示语
     * */
    public function getGreeting($timestamp=''){
        //当前时间
        $currenttime = $this->is_timestamp($timestamp);
        //早上好开始时间
        $good_morning_start_time = strtotime(date('Y-m-d',$currenttime));
        //下午好开始时间
        $good_afternoon_start_time = strtotime(date('Y-m-d 12:00:00',$currenttime));
        //晚上好开始时间
        $good_evening_start_time = strtotime(date('Y-m-d 18:00:00',$currenttime));
        if($currenttime>=$good_morning_start_time && $currenttime<$good_afternoon_start_time) return "早上好";
        if($currenttime>=$good_afternoon_start_time && $currenttime<$good_evening_start_time) return "中午好";
        return "晚上好";
    }

    //验证是否是时间戳
    public function is_timestamp($timestamp) {
        if(empty($timestamp) || strtotime(date('Y-m-d H:i:s',$timestamp)) != $timestamp)
            return time();
        return $timestamp;
    }
}
