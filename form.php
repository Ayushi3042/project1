<html>
<head>
<style>
body{
	background:#ffffff url("login.jpg") no-repeat right top;
	color:white;
}
	</style>
 </head>
<body>
<form action="sform.php" method="POST">
<h1 align=center><u>User Sign Up form</u></h1>


<table  cellpadding=10 align="center"  cellspacing="20px" id="tab">
<tr>
<td><h1><b>NAME:</td>
<td><input type="text" name="nam"></b></h1></td>
</tr>

<tr>
<td><h1><b>EMAIL ID:</td>
<td><input type="text" name="mail"><b></h1></td>
</tr>
<tr>
<td><h1><b>CONTACT NO:</td>
<td><input type="number"  name="cntct"></b><h1></td>
</tr>
<tr>
<td><h1><b>PERMANENT ADDRESS:</b></td>
<td><textarea rows=10 cols=30 name="ad"></textarea></h1></td>
</tr>

<tr><td><h1><b>FATHER NAME:</b></td><td><input type="text" name="father"><br></h1></td>
</tr>
<tr><td><h1><b>DOB:</td><td><input type="date" name="dat"></b></h1></td>
</tr>
<tr>
<td><h1><b>GENDER:</b></h1></td>
<td><h1><input type= "radio" value=m name="gen" checked>Male</h1></td>
<td><h1><input type= "radio" value=f name="gen" checked>Female</h1></td>
</tr>

<tr align="center"><td><input type="submit" name="submit" value="submit the form" ></td></tr>


</table>
</form>
</body>
</html>