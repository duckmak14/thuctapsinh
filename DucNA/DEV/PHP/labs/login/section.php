<?php
$servername = "localhost";
$userDB = "root";
$password = "anhduc";
$dbname = "security";


$connection = new mysqli($servername, $userDB, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$user_check=$_SESSION['login_user'];

$sql1 = "select username from users where username='$user_check'" ;
$ses_sql= $connection->query($sql1);
$row = $ses_sql -> fetch_array(MYSQLI_ASSOC);
$login_session =$row['username'];
if(!isset($login_session)){

mysql_close($connection); 

header('Location: index.php'); 
}
?>