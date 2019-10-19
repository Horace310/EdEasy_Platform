<?php
include('Session.php');
?>
<HTML>
    <head>
    <link rel=stylesheet href="tableCSS.css" type="text/css">
    </head>
<body text=navy>
<center> <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black">Submit Book</font></center>
<?php
$con = mysqli_connect("localhost","root","","weblib");
if(!$con)
{
	die('Could not connect: ' . mysqli_error());
}

$result = mysqli_query($con,"SELECT * FROM Tran_Book where Email='".$user_check."'");
echo "<h2 align=center>~:Transaction Details:~</h2>";
echo "<table align=center width=60% cellspacing=2>
<tr>
<th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>TransactionID</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>BookID</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Email</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Issue Date</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Due Date</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Submit Date</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>Fine(Rs.)</font></th><th><font face='ar christy' color=red size=5 style='text-shadow: 0px 0px 3px black;'>UserAction</font></th>
</tr>";	
while($row = mysqli_fetch_array($result))
{
	echo "<TR><TD align=center>{$row['TransactionID']}</TD><TD align=center>{$row['BookID']}</TD><TD align=center>{$row['Email']}</TD><TD align=center>{$row['IssueDate']}</TD><TD align=center>{$row['DueDate']}</TD>";
	if(strlen($row['SubmitDate'])>0)
		echo "<TD align=center>{$row['SubmitDate']}</TD><TD align=center>{$row['Fine']}</TD><TD align=center>---</TD></TR>";
	else
		echo "<TD align=center>---</TD><TD align=center>---</TD><TD align=center><a href=submitcnf.php?BID={$row['BookID']}&TID={$row['TransactionID']}&DueDt={$row['DueDate']}>Submit</a></TD></TR>";
}
echo "</table>";
mysqli_close($con);
?>
</BODY>
</HTML>