<?php

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($passowrd);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost", "root", "");
mysql_select_db("SecuryPi");

$result= mysql_query("SELECT * FROM Users WHERE Username= '$username' and Password = '$password'") or die("Failed to connect to the database".mysql_error());

$row=mysql_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){

	echo "Welcome to SecuryPi ".$row['username'];

}else{
	echo "Login Failed";
}


?>
