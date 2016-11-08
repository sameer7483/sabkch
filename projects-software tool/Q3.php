<html>
	<title>CHESS BOARD</title>
   <body>
   <table width="270px" cellspacing="0px" border="1px ">  
    <?php  

    	for($r=1;$r<=8;$r++)  
    	{  
         	echo "<tr>";  
        	for($c=1;$c<=8;$c++) {  
    	      	$t=$r+$c;

    	      	if($t%2==0) {  
    	     		echo "<td height=30px width=30px bgcolor=white></td>";  
    	      	}  
    	      	else {  
    	      		echo "<td height=30px width=30px bgcolor=black></td>";  
    	      	}  
    	    }  
    	    echo "</tr>";  
    	}  
    	?>  
  	</table>  
  	</body>
</html>   