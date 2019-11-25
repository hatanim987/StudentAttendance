<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, "studentattendencesystem");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email=$_POST['email'];
$password=$_POST['psw'];
$check= "SELECT * FROM studentsignup WHERE email='$email' and password='$password'";

if (mysqli_query($conn, $check)) {
  echo "Login successfully done";
} else {
  echo "Could not connect database: " . $check . "<br>" . mysqli_error($conn);
}
 ?>
