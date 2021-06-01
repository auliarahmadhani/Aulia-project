<!doctype html>
<html lang="en">
  <head>
  	<title>Google API</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login/css/style.css">

	</head>
	<body>

  <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Silahkan Login Dengan Menggunakan Akun Google!</p>
            <?php
    include('loginAPI_AuliaRahmadhani_1TIC/config.php');
    $login_button = '';
        
    if(isset($_GET["code"]))
    {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!isset($token['error'])){
            $google_client->setAccessToken($token['access_token']);
            $_SESSION['access_token'] = $token['access_token'];
            $google_service = new Google_Service_Oauth2($google_client);
            $data = $google_service->userinfo->get();
            
            if(!empty($data['given_name'])){
                $_SESSION['user_Firstname'] = $data['given_name'];
            }

            if(!empty($data['family_name'])){
                $_SESSION['user_Lastname'] = $data['family_name'];
            }

            if(!empty($data['email'])){
                $_SESSION['user_email'] = $data['email'];
            }

            if(!empty($data['picture'])){
                $_SESSION['user_img'] = $data['picture'];
            }
        }
    }

    if(!isset($_SESSION['access_token'])){
        $login_button = '<a href="'.$google_client->createAuthUrl().'"><h2>Login</h2></a>';
    }

    ?>
		      	
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">
                <?php
                    if($login_button == ''){
                        header('location:view/tampil.php');
                    }else{
                        echo '<a align="center">'.$login_button . '</a>';
                    }
                    ?>
                   </button>
	            </div>
	         
	          <div class="w-100 text-center mt-4 text">

		          
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="login/js/jquery.min.js"></script>
  <script src="login/js/popper.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>

	</body>
</html>