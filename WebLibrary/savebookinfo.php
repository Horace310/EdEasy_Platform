<html>
<head>
<title>Save Book Details</title>
<link href="MyStyle.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body id="body_book">
<center> <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black">Save Book Details</font></center>
<br>
<div class="book" style="height: 75%;">
    <h2 align="center"><b class="avatar"><center><img src="images/Book_Logo.gif"></center></b></h2> 
    <form action="SaveBook.php" method="post">
    <div>
    <pre><input type="text" placeholder="Book Name" autofocus required name="t1">
    <br><input type="text" placeholder="Author Name" autofocus required name="t2">
	<br><select name="t3" required autofocus>		
		<option value="">-- Select Category--</option>
		<option value="Article">Article</option>
		<option value="Autobiography">Autobiography</option>
		<option value="Detective">Detective</option>
		<option value="FairyTale">FairyTale</option>
		<option value="Music">Music</option>
		<option value="Novel">Novel</option>
		<option value="Poetry">Poetry</option>
		<option value="Sports">Sports</option>		
		</select>
    <br><input type="text" placeholder="Publisher Name" autofocus required name="t4">    
    <br><input type="text" placeholder="Total Stock" autofocus required name="t5">
	<!--<br><br><input type="file" required name="t6">-->
    <input type="submit" value="Save" name="submit"> <input type="Reset" value="Clear" name="reset"></pre></div>        
    </form>
</div>
</body>
</html>
