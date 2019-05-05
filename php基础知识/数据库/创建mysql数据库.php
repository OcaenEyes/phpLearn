<h3>mysqli创建数据库方法一</h3>
<?php
$servername  =  'localhost';
$username = 'root';
$password = '';
//创建连接
$conn = new mysqli($servername,$username,$password);

//检测连接
if ($conn -> connect_error){
    die("连接失败：" .$conn ->connect_error);
}
echo "连接成功";
echo "<br/>";

//创建数据库
$sql = "CREATE DATABASE phpLearn";
if ($conn -> query($sql) == TRUE){
    echo "phpLearn数据库创建成功";
}
else {
    echo "创建数据库失败:",$conn -> error;
}

echo "<br/>";
$conn -> close();
echo "关闭成功";

?>

<h3>mysqli创建数据库方法二</h3>
<?php
$servername  =  'localhost';
$username = 'root';
$password = '';
//创建连接
$conn1 = mysqli_connect($servername,$username,$password);

//检测连接
if (!$conn1){
    die("连接失败：" .mysqli_connect_error());
}
echo "连接成功";
echo "<br/>";

//创建数据库
$sql = "CREATE DATABASE phpLearn1";
if (mysqli_query($conn1,$sql)){
    echo "phpLearn数据库创建成功";
}
else {
    echo "创建数据库失败:",mysqli_error($conn1);
}

echo "<br/>";
$conn1 -> close();
echo "关闭成功";

?>


<h3>pdo创建数据库</h3>
<?php
$servername  =  'localhost';
$username = 'root';
$password = '';

try {
    $conn2 = new PDO("mysql:host=$servername;",$username,$password);
    echo "连接成功<br/>";
    $conn2 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE phpLearn2";

    $conn2 -> exec($sql);
    echo "数据库创建成功";
}
catch( PDOException $e){
    echo $e -> getMessage();
}
echo "<br/>";
$conn1 = null;
echo "关闭成功";

?>