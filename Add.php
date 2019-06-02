
<html>
<head>
<style>
body{	
background-color:#ABEBC6;
}

</style>
</head>
<body  >
<h1 align=center><u>Welcome Beauty Salon View Page</u></h1>

<table align="center" border="20px" cellspacing="5px" cellpadding="10px">
<tr>
<td>
<?php
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


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
   
			echo"<br> id:".$row["ID"]."-Name:".$row["fname"]."".$row["femail"]."".$row["faddr"]."".$row["father"]."".$row["father"]."".$row["date"]."".$row["sexx"]."<br>";
		}
} else {
    echo "0 results";
}

$conn->close();

?>
</td>
</tr>
</table>

</body>
</html>
