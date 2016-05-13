<?php 
	$host = "localhost";
	$user = "root";
	$pwd = "leon123**";
	$db = "chat";

	$con = @mysqli_connect($host,$user,$pwd,$db) or die ("Error de conexion".mysqli_connect_error());

	//$usuario=$_POST['user'];
	//$mensaje=$_POST['message'];	

	$sql = "SELECT usuario,mensaje from conversation order by idConversation asc";

	$result = mysqli_query($con,$sql);

	while ($data = mysqli_fetch_assoc($result)) {
		echo "<p><b>".$data["usuario"]."</b> dice: ".$data["mensaje"]."</p>";
	}


 ?>