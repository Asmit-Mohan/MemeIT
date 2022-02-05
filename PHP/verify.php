<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
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
</head>
<body class="bg-light">

<?php
if(!isset($_POST['verify']))
{
?>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="col-md-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-emoji-wink" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z"/>
            </svg>
            <a class="navbar-brand px-2" href="#"><h4><b>Memes</b></h4></a>
        </div>
        <div class ="col-md-2 ">
            <a class="btn float-right border-0" href="../index.php" ><h6>Home &rarr;</h6></a>
        </div>
</nav>
          
      <div>
        <div class="d-flex justify-content-center align-items-center container">
            <div class="card py-5 px-3 border shadow p-3">
                <h5 class="m-0">OTP verification</h5><br/><br/><span class="mobile-text"><b class="text-danger">Enter the OTP sent to registerd email </b> </span>
                <form method="post" action="verify.php" autocomplete="off">
                    <div class="d-flex flex-row mt-5">
					<input type ="number" name="otp" class="form-control" required/>
					</div>
                <div class="text-center mt-5">
                    <button type="submit" name="verify" value="verify" class="btn btn-info form-control text-center">Submit</button>
                </div>
                </form>
            </div>
        </div>
      </div>

<?php
}
else
{
session_start();
$fotp=$_POST['otp'];
$_SESSION["isLogin"]=0;
if($fotp==$_SESSION["otp"])
{
	$_SESSION["isLogin"]=1;
	header("Location: meme.php");
}
else
{
    header("Location: verify.php");
}
}
?>
</body>
</html>


					