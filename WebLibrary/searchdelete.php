<?php
include('Session.php');
?>
<HTML>
    <head><link rel=stylesheet href='tableCSS.css' type="text/css">
    <link href="MyStyle.css" rel="stylesheet" type="text/css"/>
        <style>
    #main{
	background: transparent;
}
#main .main_color{
	background: rgba(255, 255, 255, 0.3);
	border-radius: 10px 10px 10px 10px;
	width: 1000px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<body text=navy>
<center> <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black"> Search Book</font></center>
    <div class=book style="height: 20%;">
<FORM NAME=F1 METHOD=POST ACTION="searchdelete.php">
    <div>
    <pre><input type="text" placeholder="Book Name" autofocus required name="t1"> <br>
    <input type="submit" value="Search" name="submit"> <input type="Reset" value="Clear" name="reset"></pre></div>        
        </FORM></div>
<br><br>
<?php
if(isset($_POST["t1"]) && $_POST["t1"]!="")
{
	$s_bk=$_POST["t1"];
	$con = mysqli_connect("localhost","root","","weblib");
	if(!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	$result = mysqli_query($con,"SELECT * FROM Book where Book_Name Like '".$s_bk."%' AND Stock > 0");
	echo "<center> <font face='ar christy' color=red style='font-size: 40px; text-shadow: 0px 0px 3px black'>Search Results</font></center>";
    $cndn=mysqli_fetch_array($result);
    if($cndn >= 1){
	echo "<table align=center width=60% cellspacing=2>
	<tr>
	<th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Book ID</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Book Name</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Author Name</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Category</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Publisher</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Stock</font></center></th><th><center><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Admin Action</font></center></th>
	</tr>";
        $row=$cndn;
        while($row){
            echo "<TR><TD align=center>{$row['BOOKID']}</TD><TD align=center>{$row['BOOK_NAME']}</TD><TD align=center>{$row['AUTHOR_NAME']}</TD><TD align=center>{$row['CATEGORY']}</TD><TD align=center>{$row['PUBLISHER_NAME']}</TD><TD align=center>{$row['STOCK']}</TD><TD align=center><a href='delete.php?BID={$row['BOOKID']}'>Delete</a></TD></TR>";
            $row = mysqli_fetch_array($result);
        }
    }
    else
        echo"
        <center><div id=main><div class='main_color'>
        <font style='font-size: 20;'><br><br>Book not found </font></div></div></center>";
	echo "</table>";
	mysqli_close($con);
}
?>
</BODY>
</HTML>


