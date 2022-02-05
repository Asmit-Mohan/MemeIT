<?php
session_start();

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('725895835117-htjvbv165gmpmkmg4ts773o42cftkl83.apps.googleusercontent.com');

$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/meme_temp/PHP/gmail.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 