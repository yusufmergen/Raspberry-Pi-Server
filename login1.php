<!DOCTYPE html>
<html>
<head>
	<title>SecuryPi Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
<form action ="db.php" method="POST">

<p>
	<label>Username</label>
	<input type="text" name="username" id="username" placeholder="Username" />
</p>
<p>
	<label>Password</label>
	<input type="password" name="password" id="password" placeholder="Password" />
</p>
<p>
	<input type="submit" id="btn" value="Login"/>
</p>
</form>
</div>

</body>
</html>