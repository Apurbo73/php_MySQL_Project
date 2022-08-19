<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('903435454889-8ta2kt6pt0jqrggblmtktnn5cs0n5c93.apps.googleusercontent.com
');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/web/google%20sign%20up.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>  