<?php
include('config.php');
ERROR_REPORTING(E_ERROR);

$login_button = '';
if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 if(!isset($token['error']))
 {
	  $google_client->setAccessToken($token['access_token']);
	  $_SESSION['access_token'] = $token['access_token'];
	  $google_service = new Google_Service_Oauth2($google_client);
 }
}

if(!isset($_SESSION['access_token']))
{
    $login_button = '<a href="'.$google_client->createAuthUrl().'" style=background:red;margin-left:43%;margin-top:3%;border-radius:5px;color:white;display:block;font-weight:bold;padding:20px;text-align:center;text-decoration:none;width:200px;">Login With Google</a>';
}
?>
 <html>
 <body>
  <?php
   if($login_button == '')
   {
	  session_start();
	  $_SESSION["isGmail"] = 1;
      header("Location: meme.php");
   }
   else
   {
       echo '<div class="button">'.$login_button . '</div>';
   }
   ?>
</body>
</html>