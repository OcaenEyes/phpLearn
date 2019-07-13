<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 16:14
 */
class Computer{
    //构造方法
    public function __construct(){
        echo "cpu就绪";
        echo "主板就绪";
        echo "内存就绪";
    }

    public function  game(){
        echo "开始画图";
    }

    //析构方法
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "关闭电源";
    }
}

$computer = new Computer();
$computer ->game();
unset($computer);
echo "good job";