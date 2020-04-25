<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
   if (isset($_POST['username']) && isset($_POST['password'])) {
   $user=$_POST['username'];
   $password=$_POST['password'];
   $servername = "localhost";
   $userDB = "root";
   $password = "anhduc";
   $dbname = "security";

   $connection = new mysqli($servername, $userDB, $password, $dbname);
   if ($connection->connect_error) {
       die("Connection failed: " . $connection->connect_error);
   }

   $sql = "SELECT username, password FROM users WHERE username='$user' and password='$password' LIMIT 0,1";
   $query = $connection->query($sql);
   $row = $query -> fetch_array(MYSQLI_ASSOC);
   if ($row) {
   $_SESSION['login_user']=$user; 
   header("location: profile.php"); 
   } else {
   $error = "User và password sai";
   }
   $connection->close();  
   }
   else
      {
         $error = "Nhập user và password";
      }
}
?>