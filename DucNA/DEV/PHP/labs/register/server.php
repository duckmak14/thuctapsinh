<?php
session_start();

// initializing variables
$errors = array(); 
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "anhduc123";
$dbname = "security";

// connect to the database
$db = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT username, password FROM users WHERE username='$username' AND password='$password_1'";
  $result = $db->query($user_check_query);
  $user = $result -> fetch_array(MYSQLI_ASSOC);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $query1 = "INSERT INTO users (username, password) VALUES ('$username', '$password_1')";
   
   if ( $db->query($query1) === TRUE) {
    $_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
    } else {
        echo "Error: " . $query1 . "<br>" . $conn->error;
    }

  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $sql = "SELECT username, password FROM users WHERE username='$username' AND password='$password'";
    $query = $db->query($sql);
    $results = $query -> fetch_array(MYSQLI_ASSOC);
  	if ($results) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Login được rồi đấy ^^ out ra đê";
  	  header('location: index.php');
  	}else {
      array_push($errors, " Đăng nhập sai rồi nhé! làm lại lần nữa đê");
  	}
  }
}

?>