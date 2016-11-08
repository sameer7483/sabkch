<?php
	$uid = $_POST['uid'];
	$pw = $_POST['pw'];
	
	if($uid=="anamika" && $pw=="123"){	
		session_start();
		$_SESSION["name"]=$uid;
		$_SESSION['sid']=session_id();
		header("location:securepage.php");
	}
	else{
		header("location:Q6.php");
	}
?>
