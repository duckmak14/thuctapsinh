<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-2 **Error Based- Intiger**</title>
</head>

<body bgcolor="#000000">




<div style=" margin-top:60px;color:#FFF; font-size:23px; text-align:center">Welcome&nbsp;&nbsp;&nbsp;<font color="#FF0000"> Dhakkan </font><br>
<font size="3" color="#FFFF00">


<?php
//including the Mysql connect parameters.
$dbuser ='root';
$dbpass ='anhduc';
$dbname ="security";
$host = 'localhost';
$dbname1 = "challenges";

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM users where id = ? limit 0,1";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$_GET["id"]]);
	$result = $stmt->FETCH(PDO::FETCH_ASSOC);
	echo $result['password'];
	echo "<br>";
	echo $result['username'];
  } catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
  }
$conn->close();

?>


</font> </div></br></br></br><center>
<img src="../images/Less-2.jpg" /></center>
</body>
</html>