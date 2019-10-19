<html>
<head>
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
<title>Book Issue</title>
</head>
<body text="navy">
<center> <font face='ar christy' color=red style='font-size: 60px; text-shadow: 0px 0px 3px black'>Book Issue</font></center>
    <center>
        <div id=main>
            <div class='main_color'>
<?php
    if(isset($_GET["BID"]) && isset($_GET["MID"]))
    {
        $data1 = $_GET["BID"];
        $data2 = $_GET["MID"];
		echo "<h3>BookID:".$data1."<br>User MailID:".$data2;
		
		date_default_timezone_set("Asia/Calcutta");
		echo "<br>Issue Date: ".date("l dS \of F Y H:i:s A");
		
		$issue_date=date("Y-m-d");
		$due_date=date('Y-m-d',strtotime($issue_date. ' + 15 days'));
		echo "<br>Due date:".$due_date;
		
		//Code to Save the Issue Details at tran_book Table
		$con = mysqli_connect("localhost","root","","weblib");
		if(!$con)		
			die('Could not connect: ' . mysql_error());
		$sql="INSERT INTO tran_book(BookID,Email,IssueDate,DueDate) VALUES ({$data1},'{$data2}','{$issue_date}','{$due_date}')";
		
		if (!mysqli_query($con,$sql))
			die('Error: ' . mysql_error());
		
		//Code to Update the stock details
		mysqli_query($con,"UPDATE BOOK SET STOCK=STOCK-1 where BOOKID=$data1");
		mysqli_close($con);		
		
		echo "<br><br>Transaction Recorded and Stock Updated...";
    }
?>
</h3>
        </div></div></center>
</body>
</html>