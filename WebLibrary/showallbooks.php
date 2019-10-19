<html>
<head>
<title>All Book Details</title>
    <link rel=stylesheet href='MyStyle.css' type="text/css">
    <link rel=stylesheet href='tableCSS.css' type="text/css">
</head>
<body text=navy>
<center> <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black"> All Book Details</font></center>
<br><br>
<table align=center width=60% cellspacing=2>
<tr>
    <th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Book ID</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Book Name</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Author Name</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Publisher Name</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Stock</font></center></th>
    <!--<th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Front Cover View</font></center></th></tr>-->
<?php	
	$con=mysqli_connect("localhost","root","","weblib");		//Get connection with database username=root password is not given
	$qrystr="SELECT * FROM BOOK ORDER BY CATEGORY";				//Write the SELECT query into a string variable
	$rec=mysqli_query($con,$qrystr);					//Execute the Query
	$booktype="";	
	while($row = mysqli_fetch_array($rec, MYSQLI_ASSOC))
	{
		if(strcmp($row['CATEGORY'],$booktype)!=0)
		{
			echo "<TR><th colspan=6><center><font color=black size=3 face='Arial' style='text-shadow: 0px 0px 2px red;'>{$row['CATEGORY']}</font></center></th></tr>";
			$booktype="{$row['CATEGORY']}";
		}		
		echo "<tr>
		<TD align=center height=30><font face='Arial' size=3>{$row['BOOKID']}</font></TD>
		<TD align=left><font face='Arial' size=3>{$row['BOOK_NAME']}</font></TD>
		<TD align=left><font face='Arial' size=3>{$row['AUTHOR_NAME']}</font></TD>		
		<TD align=left><font face='Arial' size=3>{$row['PUBLISHER_NAME']}</font></TD>
		<TD align=center><font face='Arial' size=3>{$row['STOCK']}</font></td>
		<!--<TD align=center<font face='Arial' size=3>><a href='{$row['COVER_IMG']}' target='_blank'>Cover Page</a></font></TD></tr>-->";		
	}		
?>
</table><br><br>
</body>
</html>