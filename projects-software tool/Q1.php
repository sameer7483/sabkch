<html>
	<title> MULTIPLYING TWO MATRICES</title>
	<body>
		<form>
			<P> Enter the data of first matrix </p>
		<table>
			<tr>
				<td>Enter p11 <input type="number" name="p11"></p>
				<td>Enter p12 <input type="number" name="p12"></p>
				<td>Enter p13 <input type="number" name="p13"></p>
			</tr>
			<tr>
				<td>Enter p21 <input type="number" name="p21"></p>
				<td>Enter p22<input type="number" name="p22"></p>
				<td>Enter p23 <input type="number" name="p23"></p>
			</tr>
			<tr>
				<td>Enter p31 <input type="number" name="p31"></p>
				<td>Enter p32 <input type="number" name="p32"></p>
				<td>Enter p33 <input type="number" name="p33"></p>
			</tr>
		</table>

			<P> Enter the data of second matrix </p>
		<table>
			<tr>
				<td>Enter q11 <input type="number" name="q11"></p>
				<td>Enter q12 <input type="number" name="q12"></p>
				<td>Enter q13 <input type="number" name="q13"></p>
			</tr>
			<tr>
				<td>Enter q21 <input type="number" name="q21"></p>
				<td>Enter q22 <input type="number" name="q22"></p>
				<td>Enter q23 <input type="number" name="q23"></p>
			</tr>
			<tr>
				<td>Enter q31 <input type="number" name="q31"></p>
				<td>Enter q32 <input type="number" name="q32"></p>
				<td>Enter q33 <input type="number" name="q33"></p>
			</tr>
		</table>

		<input type="submit" name="submit" value="submit"/>
		</form>
	</body>	
</html>

<?php
if(isset($_REQUEST['submit']))
{
	$A=$_REQUEST['p11'];
	$B=$_REQUEST['p12'];
	$C=$_REQUEST['p13'];
	$D=$_REQUEST['p21'];
	$E=$_REQUEST['p22'];
	$F=$_REQUEST['p23'];
	$G=$_REQUEST['p31'];
	$H=$_REQUEST['p32'];
	$I=$_REQUEST['p22'];
	
	$J=$_REQUEST['q11'];
	$K=$_REQUEST['q12'];
	$L=$_REQUEST['q13'];
	$M=$_REQUEST['q21'];
	$O=$_REQUEST['q22'];
	$S=$_REQUEST['q23'];
	$T=$_REQUEST['q31'];
	$U=$_REQUEST['q32'];
	$V=$_REQUEST['q33'];

	function matrixMultiply($N, $p, $q) {
	    $r = array();
	    
    	//do the matrix multiply
    	for($i=0; $i<$N; $i++) {
    	    for($j=0; $j<$N; $j++) {
    	        $t = 0;
    	        for($k=0; $k<$N; $k++) {
    	            $t += $p[$i][$k] * $q[$k][$j];   
    	        }            
    	        $r[$i][$j] = $t;
    	    }
   		}
    
    	//return result
    	return $r;
	}

	function echoMatrix($N, $r) {
	    for($i=0; $i<$N; $i++) {
	        for($j=0; $j<=$N; $j++) {
	            if ($j==$N)
	                echo "<br>";
	            else
	                echo $r[$i][$j]."   ";            
	        }   
	    }    
	}

	$p = array();
	$p[] = array($A,$B,$C);
	$p[] = array($D,$E,$F);
	$p[] = array($G,$H,$I);

	$q = array();
	$q[] = array($J,$K,$L);
	$q[] = array($M,$O,$S);
	$q[] = array($T,$U,$V);

	echo "matrix 1<br/>";
	echoMatrix(3, $p);
	echo "<br/>";

	echo "matrix 2<br/>";
	echoMatrix(3, $q);
	echo "<br/>";

	$r = matrixMultiply(3, $p, $q);
	echo "result of matrix multiply<br/>";
	echoMatrix(3, $r);
}
?>