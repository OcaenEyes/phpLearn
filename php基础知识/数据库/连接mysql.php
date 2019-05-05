<h3>mysqli连接</h3>
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
$conn -> close();
echo "关闭成功";

?>

<h3>pdo连接</h3>
<?php
$servername  =  'localhost';
$username = 'root';
$password = '';

try {
    $conn1 = new PDO("mysql:host=$servername;",$username,$password);
    echo "连接成功";
}
catch( PDOException $e){
    echo $e -> getMessage();
}
echo "<br/>";
$conn1 = null;
echo "关闭成功";

?>