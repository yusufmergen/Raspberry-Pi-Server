<?php

session_start();
if($_POST['login']){
include_once("db.php");
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

$username = stripslashes(username);
$password = striplashes(password);

$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);

$password=md5($password);;

$sql= "SELECT * FROM Users WHERE username='$username' LIMIT 1";
$query= mysqli_query($db, $sql);
$row=mysqli_fetch_array($query);
$id=$row['id'];
$db_password= $row['password'];

if ($password == $db_password) {

	$_SESSION['username'] = $username;
	$_SESSION['id'] = $id;
	header("Location: index.php");	
}else{

	echo "Wrong Credentials";
}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SecuryPi Login</title>
</head>
<body>

<h1 style="font-family : Times;">Login</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
<input placeholder ="Username" type="text" name="username">
<input placeholder ="Password" type="text" name="password">
<input type="submit" name="login" value="Login">
</form>

</body>
</html>