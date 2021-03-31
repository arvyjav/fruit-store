<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('867345713703-3hkv98mdkse1er5vt4vfvbdi9pn0r2i2.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Dk0VjwEZAYot0NfJPV_YeRfN');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/APESHIT/logingoogle.php');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>