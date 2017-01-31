<?php

session_start();

include ("../lib/tumblrPHP.php");

$consumer_key = 'H0silBVvfyePSSX3fcQm9uOtHoAE9O78CIVv4pPNWfxV7jZ9Mo',
$consumer_secret = 'CXwuu28tmeExpRX1g66L2Ib470o8L4QeAUQwaZ8566rNVqmifx',
$token = 'Zz4kwmw5nWv6By6l7GRM8H1mi0Q8CT2dAFl4dmw9rVRhJUM95C',
$token_secret = 'Bb9xQpvrFMU4gFl0YmEeJYvbl4fBC7MpgjPVzIM87ADTAhvFFz'

$client = new TumblrAPIClient($consumer_key, $consumer_secret);
$client->setToken($token, $token_secret);

foreach ($client->getBlogPosts() as $posts) {
  echo $posts . "\n";
}

// Enter your Consumer / Secret Key:
// $consumer = "H0silBVvfyePSSX3fcQm9uOtHoAE9O78CIVv4pPNWfxV7jZ9Mo";
// $secret = "CXwuu28tmeExpRX1g66L2Ib470o8L4QeAUQwaZ8566rNVqmifx";

// // Create a new instance of the Tumblr Class with your Conumser and Secret when you create your app.
// $tumblr = new TumblrAPIClient($consumer, $secret);

// // Get the request tokens based on your consumer and secret and store them in $token
// $token = $tumblr->getRequestToken();

// $tumblr->setToken($token, )




// // Set session of those request tokens so we can use them after the application passes back to your callback URL
// // $_SESSION['oauth_token'] = $token['oauth_token'];
// // $_SESSION['oauth_token_secret'] = $token['oauth_token_secret'];

// // // Grab the Authorize URL and pass through the variable of the oauth_token
// // $data = $tumblr->getAuthorizeURL($token['oauth_token']);



// // // The user will be directed to the "Allow Access" screen on Tumblr
// // header("Location: " . $data);
?>