<?php
/**
 * Created by PhpStorm.
 * User: gaozhiyong
 * Date: 2019-05-05
 * Time: 18:30
 */
//定义变量并默认为空值
$name = $email = $website = $gender = $comment = "";
// 定义错误信息变量并默认为空值
$nameErr = $emailErr = $websiteErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])){
        $nameErr = '名字是必填项';
    }
    else {
        $name  = test_form_data($_POST['name']);
    }

    if (empty($_POST['email'])){
        $emailErr = '邮箱是必填项';
    }
    else {
        $email = test_form_data($_POST['email']);
    }
    if (empty($_POST['website'])){
        $websiteErr = '网站是必填项';
    }
    else {
        $website = test_form_data($_POST['website']);
    }
    if (empty($_POST['comment'])) {
        $comment = '';
    }
    else {
        $comment = test_form_data($_POST['comment']);
    }
    if (empty($_POST['gender'])) {
        $genderErr = '性别是必填项';
    }
    else {
        $gender = test_form_data($_POST['gender']);
    }

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
    名字：<input type="text" name="name"><span class="error">*<?php echo $nameErr;?></span><br/><br/>
    E-mail:<input type="email" name="email"> <span class="error">*<?php echo $emailErr;?></span><br/><br/>
    网址:<input type="text" name="website"> <span class="error">*<?php echo $websiteErr;?></span><br/><br/>
    性别:
    <input type="radio" name="gender" value="female">女
    <input type="radio" name="gender" value="male">男
    <span class="error">*<?php echo $genderErr;?></span>
    <br/><br/>
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
