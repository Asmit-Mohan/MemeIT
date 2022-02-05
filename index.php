<html>
<head>
<title>LOGIN HERE</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
	
	<script type="text/javascript" src="./JS/jquery.js"></script>
    <script type="text/javascript" src="./JS/google.js"></script>
	
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
	
    @media only screen and (max-width: 720px)
    {
        .hides
        {
            display: none
        }
    }
.or-container
{
		align-items: center;
		color: #ccc;
		display: flex;
		margin: 25px 0
}

.line-separator
{
    background-color: #ccc;
    flex-grow: 5;
    height: 2px
}

.or-label
{
    flex-grow: 1;
    margin: 0 15px;
    text-align: center
}
    
    </style>
</head>
<body class="bg-light">
<?php
ERROR_REPORTING(E_ERROR);
if(!isset($_POST['submit'])) //if form not sumitted then open form
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
                <a class="btn float-right border-0" href="./PHP/signup.php"><h5>Sign Up &rarr;</h5></a>
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
                                <img src= "./Image/1.jpeg" height=170px width=170px>
                            </div>
                            <div class="col-md-3">
                                <img src= "./Image/2.png" height=170px width=170px>
                            </div>
                            <div class="col-md-3">
                                <img src= "./Image/3.png" height=170px width=170px>
                            </div>
							<div class="col-md-3">
                                <img src= "./Image/4.jpg" height=170px width=170px/>
                            </div>
                          </div>

                      </div>
                  </div>
                  &nbsp;
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                  </div>
              </div>
              <div class="col-md-3 border rounded">
                    <div class="login my-4 mx-2" id='signin'>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Sign in</h4>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <form class="form md-form" method="POST" action="index.php" autocomplete="off">
                                <label for="email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email</label>
                                <span id="login_error" class="text-danger"></span>
                                <input type="email" id="email" placeholder="Email" name="email" class="form-control" required/>
                                
                                <label for="password"><i class="fa fa-lock"></i>&nbsp;&nbsp;Password</label>
                                <input type="password" id="password" maxlength="10" placeholder="Password" name="password" class="form-control" required/>
                                <br>
                                <button type="submit" name="submit" id="login" class="btn bg-success form-control">Login</button>
                                <div class="or-container">
										<div class="line-separator"></div>
										<div class="or-label">or</div>
										<div class="line-separator"></div>
									</div>
								<div class="row">
									<div class="col-md-12"> <a class="btn btn-lg btn-google btn-block text-capitalize btn-outline" href="PHP/gmail.php"><img src="https://img.icons8.com/color/16/000000/google-logo.png">&nbsp;&nbsp;&nbsp;&nbsp;Try Another Way</a> </div>
								</div>
								
                                <a href="PHP/forgot.php" class="btn float-right border-0">forgot Password?</a>
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
	$password=$_POST['password'];
	$email=$_POST['email'];
	$password_encrypt=md5($password);
	session_start();
	
	try
	{
		$pdo= new pdo('mysql:dbname=doctor;host=localhost','root','');
	}
	
	catch(pdoexception $e)
	{
		die("ERROR:COULD NOT CONNECT".$e->getmessage());
	}
	
	$email=$pdo->quote($email);
	$sql="select count(*) from user where email=$email";
	if($result=$pdo->query($sql))
	{
		$row=$result->fetch();
		if($row[0]==1)
		{
			$sql="select password from user where email=$email";
			
			if($result=$pdo->query($sql))
			{
				
				$row=$result->fetch();
				$salt=$row[0];
				$breadth=strlen($salt);
				$length=substr($password_encrypt,0,$breadth);
				
				if($length==$salt)
				{
				   $_SESSION["isLogin"]=1;
				   header("Location: ./PHP/meme.php");
		        }
				
				else
				{
					header("Location: index.php");
				}
			}
				else
				{
				   echo '<h2 id="slide">ERROR:COULD NOT EXECUTE THE QUERY $sql</h2>';	
				}
			}
			
			else
			{
				header("Location: ./PHP/signup.php");
			}
	    }
		else
		{
			
		echo '<h2 id="slide">ERROR:-COULD NOT EXECUTE THE QUERY $sql</h2>';
		
		}
		
		unset($pdo);
		
		}
		
?>
</body>
</html>