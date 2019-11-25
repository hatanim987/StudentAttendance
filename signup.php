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



  $name=$_POST['Name'];
	$email=$_POST["Email"];
  $id=$_POST["ID"];
	$password=$_POST["Password"];

	$sql = "INSERT INTO studentsignup (id,name,email,password)
	VALUES ('$id', '$name', '$email','$password')";
	if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

 ?>
