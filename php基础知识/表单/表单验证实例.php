<?php
/**
 * Created by PhpStorm.
 * User: gaozhiyong
 * Date: 2019-05-05
 * Time: 17:10
 */
//定义变量并默认为空值
$name = $email = $website = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = test_form_data($_POST['name']);
    $email = test_form_data($_POST['email']);
    $website = test_form_data($_POST['website']);
    $gender = test_form_data($_POST['gender']);
    $comment = test_form_data($_POST['comment']);

}
function test_form_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

?>
<h3>表单验证实例</h3>
<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    名字：<input type="text" name="name"><br/><br/>
    E-mail:<input type="email" name="email"><br/><br/>
    网址:<input type="text" name="website"><br/><br/>
    性别:<input type="radio" name="gender" value="female">女  <input type="radio" value="male">男<br/><br/>
    备注:<textarea name="comment" cols="40" rows="5"></textarea><br/><br/>
    <button type="submit">提交</button>
</form>


<?php
echo "<h3>输入的内容如下：</h3>";
echo $name;
echo "<br/>";

echo $email;
echo "<br/>";

echo $website;
echo "<br/>";

echo $gender;
echo "<br/>";

echo $comment;
echo "<br/>";

?>




