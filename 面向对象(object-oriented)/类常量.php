<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 16:22
 */
class Computer{
    const  YES=true;
    const NO = false;
    const ONE =1;
    const TWO = self::ONE +1;
    const THREE = self::TWO +1;
}

var_dump(Computer::TWO);