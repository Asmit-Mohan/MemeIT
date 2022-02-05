<html>
<head>
<script type="text/javascript" src="../JS/jquery.js"></script>
<script type="text/javascript" src="../JS/google.js"></script>
	<style>
	h2
	{
     margin-top:40px;
	color:black;
	text-align:center;
	font-family:cursive;
	font-size:50px;
	display:none;
    }
	a:hover
	{
       text-decoration: none;
    }
	</style>
<title></title>
<body>
<?php
	try
	{
		$pdo= new pdo('mysql:dbname=doctor;host=localhost','root','');
	}
	
	catch(pdoexception $e)
	{
		die("ERROR:COULD NOT CONNECT".$e->getmessage());
	}
				
	$OTP=mt_rand(10000,99999);
	$_SESSION["otp"]=$OTP;
	require('mail.php');   /*If mail.php not found then it will fire a warning but execution of hello1 will not stop*/
	include 'verify.php';  /*If verify.php not found then it will fire an error and stop the execution of hello1.php*/
	
?>
</body>
</head>
</html>