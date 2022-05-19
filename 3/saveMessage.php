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
	$sql = "INSERT INTO `messages` (`id`, `name`, `msg`, `email`, `imagesrc`, `datepub`) VALUES (NULL, '{$_POST['name']}', '{$_POST['msg']}', '{$_POST['email']}', '{$_POST['imagesrc']}','{$_POST['datepub']}')";
	if ($dblink->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
	    
		echo "Error: " . $sql . "<br>" . $dblink->error;
	}

	$dblink->close();
	
?>
