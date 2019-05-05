<h3>六、常量</h3>
<?php
/**
 * Created by PhpStorm.
 * User: gaozhiyong
 * Date: 2019-05-05
 * Time: 13:16
 */
//区分大小写
define("OC",'blog.oceaneyes.cn');
echo OC;
echo "<br/>";
//不区分大小写
define("YC","blog.oceaneyes.cn",true);
echo YC;
echo "<br/>";
echo yc;
?>
<h3>七、字符串变量</h3>
<?php
$x0 = "你好，乔克叔叔杂货店";
echo $x0;
echo "<h4>7.1、并置运算符</h4>";
// . 将两个字符串值连接起来
$text1 = "你好!";
$text2 = "乔克叔叔杂货店!";
$text3 = $text1."".$text2;
echo $text3;
echo "<br/>";
echo $text1."".$text2;

echo "<h4>7.2、strln()函数</h4>";
//返回字符串的长度
$text4 = "你好，乔克叔叔杂货店";
echo "字符串长度为：",strlen($text4);

echo "<h4>7.3、strpos()函数</h4>";
//用于在字符串中查找一个字符或一段指定的文本
$text5 = "你好，乔克叔叔杂货店";
echo strpos($text5,"好");
?>

<h3>八、运算符</h3>
<?php
echo "<h4>8.1、算术运算符</h4>";
$m = 19;
$n = 10;
echo '加',$m +$n;
echo "<br/>";
echo '减',$m -$n;
echo "<br/>";
echo '乘',$m * $n;
echo "<br/>";
echo '除',$m /$n;
echo "<br/>";
echo '取余数',$m % $n;
echo "<br/>";
echo '取反',-$n;
echo "<br/>";

echo "<h4>8.2、赋值运算符</h4>";
echo "略过";
echo "<br/>";
?>
<h3>九、if...else语句</h3>
<?php
$t = date("H");
if ($t < "20"){
    echo "白天，你好！";
}
else {
    echo "晚上，你好！";
}
?>

<h3>十、swith语句</h3>
<?php
$color = "blue";
switch ($color){
    case "red":
        echo "这是red";
        break;
    case "blue":
        echo "这是blue";
        break;
    case "green":
        echo "这是green";
        break;
    default :
        echo "不知道这是啥颜色";
}
?>
<h3>十一、数组</h3>
<?php
echo "<h4>11.1、创建数组</h4>";
$ar1 = array("1qa","2ws","3ed","4rf");
echo $ar1;
echo "<br/>";

echo "<h4>11.2、count()获取数组长度</h4>";
echo count($ar1);

echo "<h4>11.3、遍历数组</h4>";
$arlen = count($ar1);
for ($x1 = 0;$x1<$arlen;$x1++){
    echo $ar1[$x1];
    echo "<br/>";

}
?>
