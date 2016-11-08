<?php
	$a =$_POST['name'];
	$b =$_POST['gender'];
	$c =$_POST['hobbies'];
	$d =$_POST['dropbox'];
	$e =$_POST['pincode'];
	//$f =$_POST['lang'];

	echo "<b> Entered detailes are </b><hr />";
	echo "<b>Name:  </b>".$a."<br />";
	echo "<b>Gender: </b>".$b."<br />";
	if($c)
	echo "<b>Hobbies: </b>".$c."<br />";
	echo "<b>State: </b>".$d."<br />";
	echo "<b>Pincode: </b>".$e."<br />";
	//echo "<b>Language Known: </b>".$f."<br />";
?>