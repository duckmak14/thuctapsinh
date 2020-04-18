<?php  
	ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>



<?php
$con = mysqli_connect("localhost", "root", "anhduc","test");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($con);
?>

</div>
</body>

</html>