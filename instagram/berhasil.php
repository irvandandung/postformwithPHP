<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran berhasil</title>
	<link rel="stylesheet" type="text/css" href="ber.css">
</head>
<body>
<form method="POST" action="berhasil.php">
	<tr><h1>Instagram<br>Pendaftaran Success</h1></tr>
	<table>
		<tr>
			<td>Mobile Number or Email</td><td>:</td><td><?php echo $_POST["email"]; ?></td>
		</tr>
		<tr>
			<td>Full Name</td><td>:</td><td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td>Username</td><td>:</td><td><?php echo $_POST["username"]; ?></td>
		</div>
		</tr>
		<tr>
			<td>Password</td><td>:</td><td><?php echo $_POST["password"]; ?></td>
		</tr>
</body>
</html>