
<html>
	<head>
		<title>COOKIE</title>
	</head>

	<body>
		<h1 align="center"> TO COUNT HOW MANY TIMES YOU HAD VISITED THIS PAGE</H1>
		

		<form>
			<CENTER>
			<INPUT NAME="update" TYPE="BUTTON" VALUE="Revisit Page" OnClick="history.go(0);">
			</CENTER>
		</FORM>
	</body>	
</html>
<?php  

	if( isset($_COOKIE['visits']) ){
	    if( $_COOKIE['visits'] >= 1 ) 
	    setcookie("visits", $_COOKIE['visits'] + 1, time()+1000*60*60);
	}
	else{
	    setcookie("visits", 1, time()+1000*60*60);
	}

	echo " <h2>visits: ".$_COOKIE['visits']."</h2>";
?>  