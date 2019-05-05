
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php基础知识学习</title>
</head>
<body>
<h3>一、简介基本知识</h3>
<?php
echo "你好";
// 單行注釋
/*
多行注释
多行注释
多行注释
*/
?>

<h3>二、PHP变量</h3>
<?php
$x = 1; //全局变量
$y = 2;  //全局变量
$z = $x +$y;
echo 'x+y=',$z;
function text01() {
    $i = 10; //局部变量
    $j = 9;  //局部变量
    echo 'i-j=',$i-$j;
}
echo '<br/>';
text01();
?>

<h3>三、echo 和 print语句</h3>
<h4>3.1、echo</h4>
<?php
echo "yi","er","sah ","四";
echo "<br/>";
$cars = array('1','2','3');
echo "car{$cars[0]}";

$text = "blog.oceaneyes.cn";
echo "<br/>";
echo "zai $text 访问";

?>
<h4>3.2、print</h4>

<?php
print "1235556";
print "你好<br/>";

$cars = array('1','2','3');
print "car{$cars[0]}";

$text = "blog.oceaneyes.cn";
print "<br/>";
print "zai $text 访问";

?>

<h3>四、EOF（heredoc）使用说明</h3>
<?php
/*
 1. 必须后接分号，否则编译通不过。
2. EOF 可以用任意其它字符代替，只需保证结束标识与开始标识一致。
3. 结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)。
4. 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。
5. 当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义
*/

echo <<<EOF
    <h4>这是一个EOF测试标题</h4>
    <p>这是一个EOF测试段落</p>
EOF;
//结束需要独立一行，且前后不能空格
?>

<h3>五、数据类型</h3>
<?php
//String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）
echo "String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。";
echo "<h4>5.1、字符串</h4>";
$x1 = "你好，乔克叔叔杂货店";
echo $x1;
echo "<br/>";

echo "<h4>5.2、整型</h4>";
/*

    整数必须至少有一个数字 (0-9)
    整数不能包含逗号或空格
    整数是没有小数点的
    整数可以是正数或负数
    整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。

*/
$x2 = 123456;
var_dump($x2);
echo "<br/>";

$x3 = -12345;
var_dump($x3);
echo "<br/>";

echo "<h4>5.3、浮点型</h4>";
//浮点数是带小数部分的数字，或是指数形式。
$x4 = 10.3654;
var_dump($x4);
echo "<br/>";

echo "<h4>5.4、布尔型</h4>";
//布尔型可以是 TRUE 或 FALSE
$x5 = true;
$x6 =false;

echo "<h4>5.5、数组</h4>";
$array01 = array('1qw','2wwew','3sas','4wdsd');
var_dump($array01);

echo "<h4>5.6、对象</h4>";
/*
在 PHP 中，对象必须声明。
首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。
然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：
*/
echo "<h5>?????????看不太懂</h5>";
class Testcla {
    var $color ;
    // function __construct($color ="blue")
    // {
    //     $this -> color = $color;
    // }
    
    function what_color() {       
        return $this -> color;
    }
}

echo "<h4>5.7、NULL值</h4>";
$x8 = null;
var_dump($x8);
?>

</body>
</html>
