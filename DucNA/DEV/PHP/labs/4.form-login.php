
<!DOCTYPE >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Form login</title>
</head>

<body bgcolor="#000000">

<div  align="center" style="margin:40px 0px 0px 520px;border:20px; background-color:#0CF; text-align:center; width:400px; height:150px;">

<div style="padding-top:10px; font-size:15px;">
 

<!--Form to post the data for sql injections Error based SQL Injection-->
<form action="" name="form1" method="post">
	<div style="margin-top:15px; height:30px;">Username : &nbsp;&nbsp;&nbsp;
	    <input type="text"  name="uname" value=""/>
	</div>  
	<div> Password  : &nbsp;&nbsp;&nbsp;
		<input type="text" name="passwd" value=""/>
	</div></br>
	<div style=" margin-top:9px;margin-left:90px;">
		<input type="submit" name="submit" value="Submit" />
	</div>
</form>

</div></div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font size="6" color="#FFFF00">





<?php
$servername = "localhost";
$username = "root";
$password = "anhduc";
$dbname = "security";
$uname=$_POST['uname'];
$passwd=$_POST['passwd'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password FROM users WHERE username='$uname' and password='$passwd' LIMIT 0,1";
$result = $conn->query($sql);

$row = $result -> fetch_array(MYSQLI_NUM);

if($row){
	echo 'Your Login name:'. $row[0];
	echo "<br>";
	echo 'Your Password :'. $row[1];
	echo "<br>";
}else{
	echo 'login failed';
}




$result -> free_result();

$conn->close();

?>
</font>
</div>
</body>
</html>


