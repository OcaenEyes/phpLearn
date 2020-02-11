<?
$redis = new Redis();
$conn = $redis -> connect('10.19.214.17',6379);
echo "连接成功";
?>