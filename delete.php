<html>
   <head>
   <style>
	body
	{
		background-color:#00FF00;
	}
   </style>
     
   </head>
   
   <body>
    <h1 align="center"><u><b>Delete a Record from Beauty Salon Database</b></u></h1>
      <?php
	  
$link = mysqli_connect("localhost", "root", "", "admin"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "DELETE FROM signup WHERE Id=7"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($link); 
} 
mysqli_close($link); 
?> 
			</body>
			</html>
