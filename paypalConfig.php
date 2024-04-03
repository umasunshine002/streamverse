<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AaouUp-DUjU-lbnYHCOxF8rcECCueZ6gFsoJoiRWSJsQCLMiLNv1pid4PqL5YGpPZZdqrkFa6CQpImZ7',     // ClientID
        'EBjANT1bs-WyIHJhmbWTWCE1SBOWWAWdnIhods0uhwr1B-1beYV2jHyttXJgu37Of87IlzINTAitriqo'      // ClientSecret
    )
);
?>