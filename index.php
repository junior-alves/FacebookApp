<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//
// require './vendor/autoload.php';
//
// use Facebook\FacebookSession;
// use Facebook\FacebookRequest;
// use Facebook\GraphUser;
// use Facebook\FacebookRequestException;
//
// FacebookSession::setDefaultApplication('1517330805208053', 'c20b912bebdf0527aadaa24183415f32');
//
// if($session) {
//
// try {
//
// $user_profile = (new FacebookRequest(
// $session, 'GET', '/me'
// ))->execute()->getGraphObject(GraphUser::className());
//
// echo "Name: " . $user_profile->getName();
//
// } catch(FacebookRequestException $e) {
//
// echo "Exception occured, code: " . $e->getCode();
// echo " with message: " . $e->getMessage();
//
// }
//
// }
//
// print_r($helper);
?>

<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<title>jQuery Example</title>
		<script>
			$(document).ready(function() {

				$.ajaxSetup({
					cache : true
				});

				$.getScript('//connect.facebook.net/en_UK/all.js', function() {
					FB.init({
						appId : '935188619828681',
						cookie : true, // enable cookies to allow the server to access
						// the session
						xfbml : true, // parse social plugins on this page
						version : 'v2.1' // use version 2.1
					});
					//$('#loginbutton,#feedbutton').removeAttr('disabled');

					FB.getLoginStatus(function(response) {
						console.log(response);

						if (response.status === 'connected') {
							console.log('Welcome!  Fetching your information.... ');
							// FB.api('/me', function(response) {
								// console.log('Successful login for: ' + response.name);
							// });
							
							var tok = FB.getAccessToken();
							FB.api('/search', {
								'access_token' : tok,
								"type" : "adkeyword",
								"q" : "marketing"
							}, function(response) {
								console.log(response);
							});
						}
					});
				});
			});
		</script>
	</head>
	<body>
		<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
	</body>
</html>