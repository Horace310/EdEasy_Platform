<html>
<head>
<title>All Notes</title>
    <link rel=stylesheet href='MyStyle.css' type="text/css">
    <link rel=stylesheet href='tableCSS.css' type="text/css">
</head>
<body text=navy>
<center> <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black"> Notes</font></center>
<br><br>
<table align=center width=60% cellspacing=2>
<?php	
    echo "<center><font color=black size=3 face='Arial' style='text-shadow: 0px 0px 2px red;'>This page will have the notes based on category. Currently a work in progress. </font></center>";
	/*$con=mysqli_connect("localhost","root","","weblib");		//Get connection with database username=root password is not given
	$qrystr="SELECT * FROM videos ORDER BY CATEGORY";				//Write the SELECT query into a string variable
	$rec=mysqli_query($con,$qrystr);					//Execute the Query
    $videotype="";	
	while($row = mysqli_fetch_array($rec, MYSQL_ASSOC))
	{
		if(strcmp($row['CATEGORY'],$videotype)!=0)
		{
			echo "<TR><th colspan=6><center><font color=black size=3 face='Arial' style='text-shadow: 0px 0px 2px red;'>{$row['CATEGORY']}</font></center></th></tr>";
			$videotype="{$row['CATEGORY']}";
		}		
		echo "<tr>
	}*/		
?>
</table><br><br>
</body>
</html>