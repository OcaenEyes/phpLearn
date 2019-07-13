<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 17:51
 */
/*
 *  __set
 *  __get
 *  __isset
 *  __unset
 *  __call
 *  __callStatic
 *  __invoke
 *
 */
class Test{
    private $ab = '';
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this -> $name =$value;
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this ->$name;
    }
    public function __call($func,$arguments){
        echo ($func."<br/>");
        print_r($arguments);
    }
}
$test = new Test();
$test -> ab ='12345';
var_dump($test->ab);