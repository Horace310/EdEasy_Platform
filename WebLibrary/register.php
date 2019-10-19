<!--IllumiN00B™-->
<!DOCTYPE html>
<html>
	
<head>
	<title>Create</title>
		<meta charset="utf-8">
		<link href="style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
    <div class="mainwrite">
    <br><br><center><img src="images/boooks.png"> <br>
        <font face="ar christy" color=red style="font-size: 80px; text-shadow: 0px 0px 3px black"> Online Book Portal</font></center>
    </div>
    <div class="login-form">
        <h2><a href="add.php">Sign In</a></h2>
        <h1>Create Account</h1>
        <form name=f1 method=post action="register.php">
            <font face=magneto color=white>Enter Username:</font>
            <li>
                <input type="text" name="t1" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required><a href="#" class=" icon user"></a>
            </li>
            <font face=magneto color=white>Enter password:</font>
			<li>
                <input type="password" name="t2" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required ><a href="#" class=" icon lock"></a>
			</li>
            <font face=magneto color=white>Confirm passworrd:</font>
			<li>
                <input type="password" name="t3" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required ><a href="#" class=" icon lock"></a>
			</li>
            <div class ="forgot">
				<input type="submit" value="Create" > <a class=" icon arrow"></a>
                <?php
                if(isset($_POST['t2']) && $_POST['t2']!=null && isset($_POST['t3']) && $_POST['t3']!=""){
                    if($_POST['t2'] != $_POST['t3']){
                        echo"<script language='javascript'>
                                window.alert('Passwords do not match');
                            </script>
                            ";
                    }
                    else{
                        $con = mysqli_connect("localhost","root","","weblib");
                        if(mysqli_connect_errno()){
                            echo "Could not connect.";
                        }
                        $query = "SELECT * FROM login WHERE MEMBER_NAME = '{$_POST['t1']}'";
                        $queryArray = mysqli_fetch_array(mysqli_query($con,$query));
                        if(empty($queryArray['MEMBER_NAME'])){
                            mysqli_query($con,"INSERT INTO login VALUES ('{$_POST['t1']}','abc@xyz.com','{$_POST['t2']}')");
                            mysqli_close($con);
                            echo "<script language='javascript'>
                                    window.alert('New account created. You will be redirected to login page when you click ok');
                                    setTimeout(function(){
                                       window.location='index.php';
                                    }, 300);
                                    </script>
                                    ";
                        }
                        else{
                            echo"<script language='javascript'>
                                    window.alert('Username already exists. Please choose a different username');
                                </script>
                                ";
                        }
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>