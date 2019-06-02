<?php
 error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admin";

	$name=$_POST['nam'];
	$email=$_POST['mail'];
	$contact=$_POST['cntct'];
	$addr=$_POST['ad'];
	$fa=$_POST['father'];
	$date=$_POST['dat'];
	$gender=$_POST['gen'];
	
// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT into signup (fname,femail,fcontact,faddr,father,date,sexx) values ('".$name."','".$email."','".$contact."','".$addr."','".$fa."','".$date."','".$gender."')";
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location:Admin.php");
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
	
?>
