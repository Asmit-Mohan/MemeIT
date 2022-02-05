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
	        $sql="select email from user where email=$mailid";
			 if($result=$pdo->query($sql))
			 {
				$row=$result->fetch();
				$mailidd=$row[0];
				require('mailforgot.php');
				include 'redirect.php';
			 }
			 else
			 {
				   echo '<h2 id="slide">ERROR:COULD NOT EXECUTE THE QUERY $sql</h2>';	
			 }
?>
</head>
</body>
</html>