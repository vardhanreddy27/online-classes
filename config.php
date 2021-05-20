<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('702455199710-hhlq11gb4mh6sbrplg7cl57mk0td35kd.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('vzEf4E5R_vRAug81u_9lCxf3');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8080/canna/gindex.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
header("loaction:gindex.php");
?>