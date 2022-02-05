<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Meme Generator</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
	<script type="text/javascript" src="../JS/jquery.js"></script>
    <script type="text/javascript" src="../JS/google.js"></script>
	
    <style>
       
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button
		{
        -webkit-appearance: none;
        margin: 0;
        }

        input[type=number]
		{
          -moz-appearance: textfield;
        }	
</style>
</head>
<body class="bg-light">

<?php
if(!isset($_POST['submit'])) 
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
                <a class="btn float-right border-0" href="../index.php" ><h6>Sign in &rarr;</h6></a>
            </div>
          
            
          </nav>
          
          <div class = "container-fluid bg-light">
              <br><br>
              <div class="row">
              <div class= "col-md-8">
                  <div class ="row">
                      <br><br><br>
                      <div class="col-md-2">
                      </div>
                      <div class="col-md-10">
                          <div class="row">
                          <h1> Memes Generator</h1>
                          </div>
                          <div class="row">
                              <p> Make memes from images in just a few clicks </p>
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                                <img src= "../Image/1.jpeg" height=170px width=170px>
                            </div>
                            <div class="col-md-3">
                                <img src= "../Image/2.png" height=170px width=170px>
                            </div>
                            <div class="col-md-3">
                                <img src= "../Image/3.png" height=170px width=170px>
                            </div>
							<div class="col-md-3">
                                <img src= "../Image/4.jpg" height=170px width=170px/>
                            </div>
                          </div>

                      </div>

                  </div>
                  &nbsp;
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-310">
                          <a class="btn btn-primary" href="../index.php">Get Started > </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 border rounded">
                    
                    <div class="my-2 mx-2" id='signup'>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Sign Up</h4>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <form  method="post" action="signup.php" autocomplete="off">
                                    <label for="name"><i class="fa fa-user"></i>&nbsp;&nbsp;User Name</label>
                                    <input type="text" id="name" placeholder="User Name" name="username" maxlength="15" class="form-control" required/>
        
                                    <label for="email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email</label>
                                    <span id="email_error" class="text-danger ml-2"></span>
                                    <input type="email" id="email" placeholder="Email" name="email"  class="form-control" autocomplete="off" required/>
                                    
                                    <label for="password" class="my-2"><i class="fa fa-lock"></i>&nbsp;&nbsp;Password</label>
                                    <input type="password" maxlength="10" id="password" placeholder="Password" name="password"  class="form-control" required/>
                                    
                                    <label for="mobile"><i class="fa fa-phone"></i>&nbsp;&nbsp;Mobile</label>
                                    <input type="text" id="mobile" maxlength="12" placeholder="Mobile No." name="mobile"  class="form-control" required/>
                                    <br>
                                    <button type="submit" name="submit" id="signups" class="btn bg-success form-control">Sign Up</button> 
                        </form>
                        </div>
                        </div>
                    </div>
              </div>
          </div>
        </div>

<?php
}

else  
{
	  $mysqli = new mysqli("localhost", "root", "", "doctor"); 
	  
	    if ($mysqli === false)
		{   
	         die("ERROR: Could not connect to database. " . mysqli_connect_error());  
	    }  
 
    session_start();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password_encrypt=md5($password);
	$_SESSION["email"]=$email;
	
	error_reporting(E_ERROR);
	
  if(empty($mobile)||empty($username)||empty($password)||empty($email))
  {
	 header("Location: signup.php");
  }
  
  else
  {
	$query=mysql_query("select count(*) from user where email=$email");
	$data=mysqli_num_rows($query);
	if ($data>0) 
	{   
         header("Location: ../index.php");
    }
	else
	{
	   $sql = "insert into user (username,password,email,mobile) values ('$username', '$password_encrypt','$email','$mobile')";    
	    if ($mysqli->query($sql) === true) 
	    {       
            require 'hello1.php';       
        }
	    else
		{
			header("Location: ../index.php");
		}	  
    }
  }
}		
?>
</body>
</html>