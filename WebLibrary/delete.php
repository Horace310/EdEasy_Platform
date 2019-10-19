<?php
include('Session.php');
?>
<?php
echo "
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
    <center> <font face='ar christy' color=red style='font-size: 50px; text-shadow: 0px 0px 3px black'>Deleted!</font></center>
    <center>
    <div id=main>
    <div class=main_color>
    ";

$con = mysqli_connect("localhost","root","","weblib");
if (!$con)
{
	die('Could not connect: ' . mysqli_error($con));
}
if(isset($_GET['BID'])){
    $data1 = $_GET['BID'];
mysqli_query($con,"DELETE FROM book WHERE BOOKID=$data1");

mysqli_close($con);
echo "Book has been deleted from database!";
    echo "
    </div>
    </div>
    </center>
    ";
}
?>