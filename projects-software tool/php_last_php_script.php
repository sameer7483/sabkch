<?php
	$myFile = "data.txt";
	$fh = fopen($myFile, 'a');
	$c = implode(",", $_POST) . "\n";
	fwrite($fh, $c);
	echo readfile("data.txt");
	fclose($fh);

?>