<html>
	<head>
		<title>
			DATA FORM1
		</title>
	</head>

	<script type="text/javascript">
		function validateForm() {
    		var x = document.getElementById("A").value;
   			if (x == null || x == "") {
        		alert("Name must be filled out");
        		return false;
   			}
   			var y = document.getElementById("B").value;
        	if(y == null || y == ""){
        		alert("PASSWORD is must");
        		return false;
        	}

        	var p = document.getElementById("g1");
        	var q = document.getElementById("g2");
        	var r = document.getElementById("g3");
        	if((!p.checked) && (!q.checked) && (!r.checked)){
        		alert("Entering the gender is must");
        		return false;
        	}
			
        	var i = document.getElementById("z1");
        	var o = document.getElementById("z2");
        	var z = document.getElementById("z3");
        	if((!i.checked) && (!o.checked) && (!z.checked)){
        		alert("Entering the hobbies is must");
        		return false;
        	}


			var q =document.getElementById("p").value;
			if(q=="0"){
				alert("Enter the State. ");
				return false;
			}
			
        	var a = document.getElementById("D").value;
        	if(a== null || a=="" ){
        		alert("Enter your pincode.");
        		return false;
        	}
        	else if(isNaN(a)==true){
        		alert("Pincode is a number. Don't you know this.")
        		return false;
        	}
			
			var y = document.getElementById("lang").value;
			if( y =="0"){
				alert("Enter the language known. ");
				return false;
			}
		}
	</script>

	<body>
		<H1 align="center"><B><U> DATA FORM </B></U></H1>
		<p><b>The field with ' * ' mark is reqired</b></p>

		<form name="myForm" action="abc.php" onsubmit="return validateForm()" method="post">
			
			<TABLE width="100%">
				<TR>
					<TD>NAME*</TD>
					<TD width="200">: <input type="text" name="name" id="A"/></TD>
				</TR>
				<tr>
					<td>PASSWORD* </td>
					<td>
						: <input type="password" name="password" id="B"/>
					</td>
				</tr>
				<tr>
					<td>GENDER* </td>
					<td>
						: <input type="radio" name="gender" value="Female" id="g1">FEMALE
						<input type="radio" name="gender" value="Male" id="g2">MALE
						<input type="radio" name="gender" value="Others" id="g3">OTHERS
					</td>
				</tr>
				<tr>
					<td>HOBBIES*</td>
					<td>
						: <input type="checkbox" name="hobbies" value="Reading" id="z1">READING
						<input type="checkbox" name="hobbies" value="Music" id="z2">MUSIC
						<input type="checkbox" name="hobbies" value="Sport" id="z3">SPORT
					</td>
				</tr>
				<tr>
					<td>STATE*</td> 
					<td>
						<select name="dropbox" id="p">
							: <option value="0" selected>Select State</option>
							<option value="Gujarat"> Gujarat </option>
							<option value="Madhya Pradesh"> Madhya Pradesh </option>
							<option value="Delhi"> Delhi </option>
							<option value="Andra pradesh"> Andra Pradesh</option>
							<option value="Maharastra"> Maharastra</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>PINCODE*</td>
					<td>
						: <input type="text" name="pincode" id="D"/> </td>
				</tr>
				<tr>
					<td>PHOTO</td> 
					<td>
						: <input type="file" name="fileupload" accept="image*/" id="p"/>
					</td>
				</tr>
				<tr>
					<td>LANGUAGE KNOWN*</TD>
					<TD>
						<select multiple id="lang" >
							:<option value="0" selected>Select Language</option> 
							<option value="Hindi" name="language"> Hindi</option>
							<option value="Gujarati" name="language"> Gujarati </option>
							<option value="English" name="language"> English </option>
							<option value="French" name="language"> French </option>
							<option value="German" name="language"> German </option>
						</select>
					</TD>
				</TR>
			</table>
			<p align="center">
				<input type="submit" name="submit" value="Submit" />
				<input type="reset" name="reset"  value="Reset" />
			</p>
		</form>

	</body>
</html>