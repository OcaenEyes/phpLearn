<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 15:58
 */
//定义一个类
class Computer{
    //定义属性
    //为属性增加访问控制，public 公有， privat 私有， protected 受保护的
    public  $cpu = 'intel 9700k';
    private  $money = '4000';
    protected $mainboard='z390';

    //定义方法
    //访问控制
    public function game(){
        // this 可理解为该类的一个实例，在类内调用类的属性或方法
        echo $this ->cpu;
        echo "hahahahh";

    }
    public function job($work = '写代码'){
        echo $this->money;
        echo ($this -> game());
    }

}

//根据类生成对象
//实例
$computer = new Computer();
var_dump($computer ->cpu);
$computer ->job();