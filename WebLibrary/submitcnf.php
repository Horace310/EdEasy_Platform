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
    <center> <font face='ar christy' color=red style='font-size: 50px; text-shadow: 0px 0px 3px black'>Transaction Details</font></center>
    <center>
    <div id=main>
    <div class=main_color>
    ";
if(isset($_GET["BID"]) && isset($_GET["TID"]))
{
	$data1 = $_GET["BID"];
	$data2 = $_GET["TID"];
	$data3 = $_GET["DueDt"];
	echo "<h3>BookID:".$data1."<br>TransactionID:".$data2."<br>Due date:".$data3;
	
	date_default_timezone_set("Asia/Calcutta");
	echo "<br>Submit Date: ".date("l dS \of F Y H:i:s A");	
	
	//difference between SubmitDate and DueDate
	$submit_date = time(); 			// or your date as well
	$due_date = strtotime($data3);
	$datediff = $submit_date - $due_date;
	echo "<br>Due date: ".date('Y-m-d',$due_date)."<br>Submit date: ".date('Y-m-d',$submit_date);
    if(floor($datediff/(60*60*24))<=0)
        echo "<br>Book submitted in time";
	if(floor($datediff/(60*60*24))>0)
		$fine=floor($datediff/(60*60*24))*5;
	else
		$fine=0;
	$submit_date=date('Y-m-d',$submit_date);
	
	//Code to Save the Submit Details at tran_book Table
	$con = mysqli_connect("localhost","root","","weblib");
	if(!$con)		
		die('Could not connect: ' . mysqli_error());
	$sql="UPDATE tran_book SET SubmitDate='{$submit_date}',Fine={$fine} WHERE TransactionID={$data2}";
	if (!mysqli_query($con,$sql))
		die('Error: ' . mysqli_error());
	
	//Code to Update the stock details
	mysqli_query($con,"UPDATE BOOK SET STOCK=STOCK+1 where BOOKID=$data1");
	mysqli_close($con);		
	echo "<br><br>Fine = Rs. ".$fine;	
	echo "<br><br>Transaction Recorded and Stock Updated...</h3>";
}
echo "
    </div>
    </div>
    </center>
    ";
?>