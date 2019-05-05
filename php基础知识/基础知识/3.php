
<h3>十二、数组排序</h3>
<?php
/*

    sort() - 对数组进行升序排列
    rsort() - 对数组进行降序排列
    asort() - 根据关联数组的值，对数组进行升序排列
    ksort() - 根据关联数组的键，对数组进行升序排列
    arsort() - 根据关联数组的值，对数组进行降序排列
    krsort() - 根据关联数组的键，对数组进行降序排列

*/
echo "<h4>12.1、sort()对数组升序</h4>";
$ar0 = array('4qa','2ws','1ed','3rf','5tg');
sort($ar0);
var_dump($ar0);
echo "<br/>";

echo "<h4>12.2、rsort()对数组降序</h4>";
$ar0 = array('4qa','2ws','1ed','3rf','5tg');
rsort($ar0);
var_dump($ar0);
echo "<br/>";

echo "<h4>12.3、asort()按照数组的值，对数组什升序</h4>";
$ar1 = array("vcas"=>"19","daxc"=>"45","uytt"=>"13");
asort($ar1);
var_dump($ar1);
echo "<br/>";

echo "<h4>12.4、ksort()按照数组的键，对数组什升序</h4>";
$ar1 = array("vcas"=>"19","daxc"=>"45","uytt"=>"13");
ksort($ar1);
var_dump($ar1);
echo "<br/>";

echo "<h4>12.5、arsort()按照数组的值，对数组什降序</h4>";
$ar1 = array("vcas"=>"19","daxc"=>"45","uytt"=>"13");
arsort($ar1);
var_dump($ar1);
echo "<br/>";

echo "<h4>12.6、krsort()按照数组的键，对数组什降序</h4>";
$ar1 = array("vcas"=>"19","daxc"=>"45","uytt"=>"13");
krsort($ar1);
var_dump($ar1);
echo "<br/>";
?>

<h3>十三、超全局变量</h3>
<?php
/*

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION

*/
?>

<h3>十四、循环</h3>
<?php
/*

    while - 只要指定的条件成立，则循环执行代码块
    do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环
    for - 循环执行代码块指定的次数
    foreach - 根据数组中每个元素来循环代码块

*/
echo "<h4>14.1、while循环</h4>";
/*
while 循环将重复执行代码块，直到指定的条件不成立。
只要 i 小于或者等于 5，while 循环将继续运行。循环每运行一次，i 就会递增 1：
*/
$i = 1;
while ($i <=5) {
    echo "数字是：",$i,"<br/>";
    $i ++;
}

echo "<h4>14.2、do-while循环</h4>";
/*
do...while 语句会至少执行一次代码，然后检查条件，只要条件成立，就会重复进行循环。
开始 do...while 循环。循环将变量 i 的值递增 1，然后输出。先检查条件（i 小于或者等于 5），只要 i 小于或者等于 5，循环将继续运行：
*/
$j = 1;
do {
    $j ++;
    echo "数字是：",$j,"<br/>";
}
while ($j <=5);


echo "<h4>14.3、for循环</h4>";
/*
for 循环用于您预先知道脚本需要运行的次数的情况。

    初始值：主要是初始化一个变量值，用于设置一个计数器（但可以是任何在循环的开始被执行一次的代码）。
    条件：循环执行的限制条件。如果为 TRUE，则循环继续。如果为 FALSE，则循环结束。
    增量：主要用于递增计数器（但可以是任何在循环的结束被执行的代码）。

注释：上面的初始值和增量参数可为空，或者有多个表达式（用逗号分隔）
*/
for ($m = 1; $m <=5;$m++){
    echo "数字是：",$m,"<br/>";
}

echo "<h4>14.4、foreach循环</h4>";
//foreach 循环用于遍历数组
$arr2 = array('1qa','2ws','3ed');
foreach ($arr2 as $value ){
    echo $value ,"<br/>";

}
?>
