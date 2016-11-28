<?php

session_start();
include 'db.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM Users WHERE Username='$username' and Password='$password'";
$result = msqli_query($conn,$sql);


if(!$row = mysqli_fetch_assoc($result)){

    echo "Credentials does not match";

}else{
	
	$_SESSION['id'] = $row['id']; 
	header("Location : main.php");
}





?>

