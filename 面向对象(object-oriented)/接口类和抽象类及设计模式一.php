<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 18:11
 */
//接口
interface Person {
    public function eat();
    public function sleep();
}

class Man implements Person{
    public function eat()
    {
        // TODO: Implement eat() method.
        echo "吃大餐";
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
        echo "睡好觉";
    }
}
class Woman implements Person{
    public function eat()
    {
        // TODO: Implement eat() method.
        echo "吃大餐";
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
        echo "睡好觉";
    }
}

class L {
    public static function factory(Person $user){
        return $user;
    }
}

$user = L::factory(new Man());
$user ->eat();
$user ->sleep();