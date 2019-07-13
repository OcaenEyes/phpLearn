<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 18:27
 */
//接口继承

interface Ia {
    public function eat();
}

interface Ib {
    public function sleep();
}

interface AB extends Ia,Ib{

}

class Test implements AB {
    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
    }
}

class Test1 implements Ia,Ib{
    public function eat()
    {
        // TODO: Implement eat() method.
    }
    public function sleep()
    {
        // TODO: Implement sleep() method.
    }
}