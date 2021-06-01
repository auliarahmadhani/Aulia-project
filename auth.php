<?php

    require_once __DIR__.'/vendor/autoload.php';

    session_start();

    $client = new Google_Client();
    $client->setAuthConfigFile('client_secret.json');
    $client->setRedirectUri("http://localhost/UTS-BPWL_AuliaRahmadhani_1TIC/loginAPI_AuliaRahmadhani_1TIC/auth.php");
    $client->setScopes(array(
        "https://www.googleapis.com/auth/userinfo.email",
        "https://www.googleapis.com/auth/userinfo.profile",
    ));

    if(!isset($_GET['code'])) {
        $auth_url = $client->createAuthUrl();
        header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));       
    } else {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();

        try {
            //profile
            $plus = new Google_Service_Oauth2($client);
            $_SESSION['access_profile'] = $plus->userinfo->get();
        } catch (\Exception $e) {
            echo $e->__toString();

            $_SESSION['access_token'] = "";
            die;
        }

        header('Location:index.php');
    }


?>