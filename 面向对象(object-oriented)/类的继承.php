<?php
/**
 * Created by PhpStorm.
 * User: YSilhouette
 * Date: 2019/7/13
 * Time: 16:26
 */
class Dad {
    public function Tbook() {
        echo "book";
    }
}

class Boy extends Dad {
    public function run(){
        $this ->Tbook();
    }

}

$boy = new Boy();
$boy ->run();