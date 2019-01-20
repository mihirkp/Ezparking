<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '597902499889-mi66l8h08n847embm5buuv4d31gkdv5d.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'k4z8LEio8A6y2uxS9IjIsFQJ'; //Google client secret
$redirectURL = 'http://localhost/Ezparking/google_login_api_HRWNdR/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>