<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 17:43
 */
class A {
    public static  function who(){
        echo "A 的who方法";
    }
    public static function test(){
        static::who();
    }
}

class B extends A{
    public static function who(){
        echo "B的who方法";
    }
}
B::test();