<h3>十五、函数</h3>
<?php
echo "<h4>15.1、创建PHP函数</h4>";
function test01(){
    echo "blog.oceaneyes.cn";
}
echo "我的站点是：";
test01();
echo "<br/>";

echo "<h4>15.2、添加参数</h4>";
function test02($fname){
    echo $fname,'哈哈哈<br/>';
}
echo "我的站点是：";
test02("blog.oceaneyes.cn");

echo "<h4>15.返回值</h4>";
function test03($x,$y){
    $total = $x +$y;
    return $total;
}
echo "1+16 = ",test03(1,16);
echo "<br/>";
?>


