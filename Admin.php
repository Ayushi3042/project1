<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, fname, femail,fcontact,faddr,father,date,sexx FROM signup";
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
   
			echo"<br> id:".$row["ID"]."-Name:".$row["fname"]."".$row["femail"]."".$row["faddr"]."".$row["father"]."".$row["father"]."".$row["date"]."".$row["sexx"]."<br>";
		}
} else {
    echo "0 results";
}

$conn->close();*/
?> 

<html>
<head>
<style>
body
{
	margin:0px;
	border:0px;
}

#header{
	width:100%;
	height:120px;
	background:black;
	color:white;
}

#sidebar
{
width:300px;
height:400px;
background:#FF4500;
float:left;
}

#data
{
	height:700px;
	background:#BC8F8F;
	color:black;
	
}
ul li
{
	padding:20px;
	font-size:30px;
	font-style:Tahoma;
	color:white;
	text-decoration:none;
	border-bottom:2px solid black;
	
}
ul li:hover
{
	background:#C0C0C0;
	color:white;
}
</style>
</head>
<body>
<div id="header">
<form action="" method="POST">
<center><img src="user.png" alt="user" height="80px" width="80px" style="border-radius:50px";><br/>
This is Admin Portal.</center>
</div>
<div id="sidebar">
	<ul>
	<li><a href="Add.php">View Data</a></li>
	<li><a href="form.php">Add Data</a></li>
	<li ><a href="delete.php">Delete Data</a></li>
	<li><a href="update.php">Update Data</a></li>
		<a href="https://www.facebook.com/ayushi.gupta" target="_blank" style="color:black;text-decoration:none;"><li>Devloper</li></a>
	</ul>
</div>
<div id="data"><br/>
<h1 align="center"><font style="font-size:80px;"><u>Welcome Admin!</u></font></h1>
</div>
</form>
</body>
</html>