<?php

session_start();

if(!isset($_SESSION['id'])){

	header("Location: login.php");
}
include_once("db.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Monitoring Page</title>
	<style>
		body{
			text-align: center;
		}

	</style>
</head>
<body>


<h1> This is a monitoring page </h1>
<input type="submit" name="submit" value="Arm The System">
<input type="submit" name="submit" value="Disarm The System">
<input type="submit" name="submit" value="Check System Status">
<input type="submit" name="submit" value="Log Information">

<form action="logout.php">
    <input type="submit" id="logout" value="Log Out" />
</form>


</body>
</html>

*/