<?php

include ("../lib/tumblrPHP.php");

// Enter your Consumer (Also known as oyur API KEY)
$consumer = "H0silBVvfyePSSX3fcQm9uOtHoAE9O78CIVv4pPNWfxV7jZ9Mo";

// Create a new instance of the Tumblr Class with your Conumser when you create your app. You can pass an empty string for the secret, or you can add it.
$tumblr = new Tumblr($consumer, "CXwuu28tmeExpRX1g66L2Ib470o8L4QeAUQwaZ8566rNVqmifx");

// Grab the followers by using the oauth_get method.
$info = $tumblr->get("/blog/blog.untappd.com/info");

print_r($info);

?>