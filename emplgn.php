<?php include "config.php"; ?>
<?php
//echo 
if (isset($_POST['login'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$type = "user";
	//sql query
	$sql = "SELECT * FROM users WHERE Username ='$name'";
	$result = $mysqli->query($sql);
	//fetching user details
	$row = $result->fetch_assoc();
	if ($name == $row['Username'] && $password == $row['Password'] && $type == $row['Type']) {
			header("Location:user.php");
	}else {
			echo "<script>";
			echo "alert('Please enter valid login credentials')";
			echo "</script>";	
	} 
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE LOGIN</title> 
	<style>
		fieldset {
			width: 30%;
			text-align: center;
			border: 2px solid #002266;
    		border-radius: 4px;
    		background-color: #f1f1f1;
		}
		input[type=text] {
    		border: 2px solid #002266;
    		border-radius: 4px;
    		color: white;
		}
		input[type=text]:focus {
    		background-color: #002266;
		}
		input[type=text]:hover {
    		background-color: #002266;
		}
		input[type=password] {
    		border: 2px solid #002266;
    		border-radius: 4px;
    		color: white;
		}
		input[type=password]:focus {
    		background-color: #002266;
		}
		input[type=password]:hover {
    		background-color: #002266;
		}
		legend {
			background-color: #002266;
			color: white;
		}
		label {
			color: #002266;
		}
		input[type=submit] {
    		color: white;
    		background-color: #002266
		}
		input[type=submit]:hover {
    		background-color: #002233;
		}
		footer {
	bottom: 0;
	width: 100%;
	position: fixed;
	background-color: #002266;
	color: white;
	text-align: center;
}
	</style>
</head>
<body>
<div id="logo" style="top:0; position: fixed; width: 100%; background-color: #f1f1f1; text-align: center;">
	<center><img src="hpcl_logo.png" alt="Welcome to HPCL"></center>
	<hr width="100%" size="40px" style="background-color: #002266; margin-bottom: 0%">
</div>
<div style="margin-top: 10%;">
	<marquee style="background-color: #002266; color: white; position: fixed;" loop=0 scroll="slide">
	<div style="width:100%;border:0px solid #000;">
	<div style="float:left; width:40%">Hindustan Petroleum Corporate Limited</div>
	<div style="float:left; width:10%"></div>
	<div style="float:left; width:40%">Hindustan Petroleum Corporate Limited</div>
	</marquee> 
</div>
<br>
<div style="margin-top: 5%; width: 100%;">
<center><fieldset>
		<legend>LOGIN TO PROCEED</legend>
		<center><form method="post" action="emplgn.php" name="loginform">
			<table border="0" cellspacing="10" cellpadding="10">
				<tr>
					<td><label>Username :</label></td>
					<td><input type="text" name="name" placeholder="Enter username"></td>
				</tr>
				<!--next level -->
				<tr>
					<td><label>Password :</label></td>
					<td><input type="password" name="password" placeholder="Enter password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="login" value="LOGIN"></td>

				</tr>
			</table>
	</form></center>
</fieldset></center>
</div>
<footer>
	Copyrights reserved by HPCL 
</footer>
</body>
</html>