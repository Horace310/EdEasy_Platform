<html>
<head>
<title>All Member Details</title>
    <link rel=stylesheet href='tableCSS.css' type="text/css">
</head>
<body text=navy>
<center> <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black"> All Member Details</font></center>
<br><br>
<table align=center width=60% cellspacing=2>
<tr>
    <th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Member Name</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Email</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Password</font></center></th></tr>
<?php	
	$con=mysqli_connect("localhost","root","","weblib");		//Get connection with database username=root password is not given
	$qrystr="SELECT * FROM LOGIN ORDER BY MEMBER_NAME";				//Write the SELECT query into a string variable
	$rec=mysqli_query($con,$qrystr);					//Execute the Query	
	while($row = mysqli_fetch_array($rec, MYSQLI_ASSOC))
	{			
		echo "<tr>		
		<TD align=center><font face='Quikhand' size=3>{$row['MEMBER_NAME']}</font></TD>
		<TD align=center><font face='Quikhand' size=3>{$row['EMAIL']}</font></TD>		
		<TD align=center><font face='Quikhand' size=3>{$row['PASSWORD']}</font></TD></tr>";		
	}		
?>
</table><br><br>
</body>
</html>