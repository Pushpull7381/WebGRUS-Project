<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MySql-PHP 연결 테스트</title>
</head>
<body>
 
<?php
echo "MySql 연결 테스트<br>";
 
$db = mysqli_connect("localhost", "root", "1111", "pika");
 
if($db){
    echo "connect : 성공이야~<br>";
}
else{
    echo "disconnect : 실패야,,마음껏 좌절해<br>";
}
 
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
 
</body>
</html>
