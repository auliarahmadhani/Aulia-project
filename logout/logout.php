<?php
    require_once '../vendor/autoload.php';
    
    $google_client = new Google_Client();
    $google_client->setClientId('701189161167-np620epe8dvmva9tv0cjpkqp2mlvjq3p.apps.googleusercontent.com');
    $google_client->setClientSecret('x3d3pg36nv3V8rU_isc_1TPX');
    $google_client->setRedirectUri('http://localhost/UTS_BPWL_AuliaRahmadhani_1TIC/');
    $google_client->addScope('email');
    $google_client->addScope('profile');

    session_start();

    $google_client->revokeToken();
    session_destroy();
    header('location:../index.php');
?>