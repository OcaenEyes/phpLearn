<?php
/**
 * Created by PhpStorm.
 * User: gaozhiyong
 * Date: 2019-07-14
 * Time: 10:13
 */
//  引入meepoPS
include "MeepoPS-master/MeepoPS/index.php";

$telnet = new \MeepoPS\Api\Telnet('127.0.0.1','8080');

$telnet -> childProcessCount =1;
$telnet->instanceName = 'jishi-test-telnet';

$telnet->callbackConnect = function ($connect){
    echo "新连接加入了，id是".$connect->id;
};

$telnet ->callbackNewData = function ($connect,$data){
    echo "收到消息，id是".$connect->id;
    echo "消息内容是:".$data."\n";

};

//启动meepops
\MeepoPS\runMeepoPS();
