<?php
	$dbhost = 'localhost';
	$dbuser = 'a0669467_tur';
	$dbpass = '123';
	$dbname = 'a0669467_tur';
	$dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	if ($dblink->connect_errno) {
		printf("Failed to connect to database");
		exit();
	}
	
	$result = $dblink->query("SELECT * FROM messages");
	$data = array();
	
	while ( $row = $result->fetch_assoc())  {
		$data[]=$row;
	}
	
	echo json_encode($data);
?>