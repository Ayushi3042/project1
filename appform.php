<?php
 error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admin";

	$name=$_POST['uname'];
	$email=$_POST['Addr'];
	$contact=$_POST['contact'];
	$addr=$_POST['book'];
	$fa=$_POST['date'];
	$date=$_POST['tym'];
	
	
// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT into appointment (name,address,mobile,appoint,dat,time) values ('".$name."','".$email."','".$contact."','".$addr."','".$fa."','".$date."')";
	
	if (mysqli_query($conn, $sql)) {
   /* echo "New record created successfully";
	header("Location:appform.php");*/
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
	
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

	
</style>
</head>
<body >


<h2 align="center"><u>Book Appointment with Salon Beauty</u> </h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Booking</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="user.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
	  
	   <label for="Addr"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="Addr" required>
	  
	  <label for="mb"><b>Contact Number</b></label>
      <input type="number" placeholder="Enter Contact Number" name="contact" required>
	  
	  <label for="app"><b>Appointment for</b></label>
      <select name="book">
	  <option value="manicure">Manicure</option>
	  <option value="spa">Spa</option>
	  <option value="mehandi">Mehandi</option>
	  <option value="facial">Facial</option>
	  <option value="waxing">waxing</option>
	  <option value="Haircolor">Hair color</option>
	  <option value="Herbal">Herbal</option>
	  <option value="Makeup">Makeup</option>
	</select>
      <label for="date"><b>Date</b></label>
      <input type="Date" placeholder="choose Date" name="date" required>
	  
	  <label for="Time"><b>Time</b></label>
      <input type="time" placeholder="choose Time" name="tym" required>
        
      <button type="submit">Booked!</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
