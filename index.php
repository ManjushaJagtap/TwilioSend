<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "#########################"; 
$token  = "#######################"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("############", // to 
                           array( 
                               "from" => "+18482428351",       
                               "body" => "Hello! from Manjusha Jagtap CS 643 Fall 2018" 
                           ) 
                  ); 
 
print($message->sid);