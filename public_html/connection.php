<?php 
	$db_server = "localhost";
	$db_user = "id20008201_sadmanarnob";
	$db_pass = "CHANGE_ME_DB_PASSWORD";
	$db_name = "id20008201_pharmacymanagementsystem";
	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
	if(!$conn)
	{
		die("Connection failed : ".mysqli_connect_error());
	}
?>