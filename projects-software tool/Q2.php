<html>
	<title>TO CHECK THE TRIANGLE</title>
	<body>
		<b>Enter three sides of triangle</b><hr />
		<form>
			Enter the first side: <input type="number" name="a1">
			Enter the second side: <input type="number" name="a2">
			Enter the third side: <input type="number" name="a3"><br />

			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>	
</html>

<?php
if(isset($_GET['submit'])){
	$a=$_GET['a1'];
	$b=$_GET['a2'];
	$c=$_GET['a3'];

	if($a!=$b && $b!=$c && $c!=$a){
		echo "The triangle is SCALAR TRIANGLE";
	}
	else{
		if($a==$b && $b==$c && $c==$a)
			echo "The triangle is EQUILATERAL TRIANGLE";
	else{
		if(($a==$b && $b!=$c) || ($b==$c && $c!=$a) || ($c==$a && $a!=$b))
			echo "The triangle is ISOSCELES TRIANGLE";
	}
}

	if(($a*$a == $b*$b +$c*$c) ||($b*$b ==$a*$a +$c*$c) ||($c*$c ==$b*$b +$a*$a)){
		echo " and is also RIGHT ANGLED";
	}
}
?>