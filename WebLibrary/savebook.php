<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"weblib");

$sql="INSERT INTO BOOK(BOOK_NAME,AUTHOR_NAME,CATEGORY,PUBLISHER_NAME,STOCK,COVER_IMG) VALUES('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]',$_POST[t5],NULL)";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

echo "<h3 align=center>Book details recorded successfully...</h3>";
?>

