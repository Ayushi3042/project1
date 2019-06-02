<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['Username']) || empty($_POST['Password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['Username'];
 $pass=$_POST['Password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "admin");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM loginform WHERE Password='$pass' AND User='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows==1)
 {
 header("Location: form.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>

<!Doctype html>
<html>
	<head>
	<link rel="stylesheet" a href="css\font-awesome.min.css">
	<style>
		body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("backsal.png");
   background-size:cover;
 

  /* Control the height of the image */
  min-height: 700px;

  /* Center and scale the image nicely */
 
  
 
  position: relative;
}

/* Add styles to the form container */
.container {
  position: relative;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: powderblue;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

	</style>
	</head>
	
	
	<body>
	<div class="bg-img">
  <form action="" method="post" class="container">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Your Name" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
	<button type="submit" name="submit" value="Login"  class="btn"/>Login</button>
  
  </form>
</div>
	</body>
	</html>