<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require './vendor/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

// $facebook = new Facebook(array(
    // 'appId' => '846603932071076',
    // 'secret' => '213db9ce119a812e54b39d72c49ce7ec',
// ));


FacebookSession::setDefaultApplication('846603932071076', '213db9ce119a812e54b39d72c49ce7ec');

// $helper = new FacebookRedirectLoginHelper('https://www.facebook.com/blogsaudediaadia');
// $loginUrl = $helper->getLoginUrl();
// Use the login url on a link or button to redirect to Facebook for authentication

$helper = new FacebookRedirectLoginHelper();
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}
if ($session) {
  // Logged in
}

print_r($helper);

?>