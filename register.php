<?php 
	$host = "localhost";
	$user = "root";
	$pwd = "leon123**";
	$db = "chat";

	$con = @mysqli_connect($host,$user,$pwd,$db) or die ("Error de conexion".mysqli_connect_error());

	$usuario=$_POST['user'];
	$mensaje=$_POST['message'];	

	$sql = "INSERT into conversation (usuario,mensaje) values('$usuario','$mensaje')";

	$result = mysqli_query($con,$sql);

	if ($result) 
		echo "Mensaje registrado.";
	


 ?>