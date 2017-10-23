<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran berhasil</title>
	<link rel="stylesheet" type="text/css" href="ber.css">
</head>
<body>
	<?php 
$host= "localhost";
$user= "root";
$password= "";
$no_or_email=$_POST['email'];
$name=$_POST['nama'];
$username=$_POST['username'];
$passwd=$_POST['passwd'];

$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'instagram');
$sql="insert into user values ('$no_or_email', '$name', '$username', '$passwd')";
$hasil=mysqli_query ($conn,$sql); 

?>
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
			<td>Password</td><td>:</td><td><?php echo $_POST["passwd"]; ?></td>
		</tr>
</body>
</html>