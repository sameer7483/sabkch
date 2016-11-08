<?php
	session_start();
	if($_SESSION['sid']==session_id()){
		echo "Welcome" . " " . $_SESSION["name"] . "<br>";
		echo "<a href='logout.php'>Logout</a>";
	}
	else{
		echo "You are not logged in:(";
	}
?>