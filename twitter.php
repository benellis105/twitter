<?php
error_reporting(0);

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$user = $_GET['user'];

$consumerKey = "";
$consumerSecret = "";
$accessToken = "";
$accessTokenSecret = "";

$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$statuses = $connection->get("friends/list", ["screen_name" => $user, "count" => 200]);
for ($i=0; $i < count($statuses->users); $i++) {
    $username = $statuses->users[$i]->screen_name;
    echo ("<a href=\"https://www.twitter.com/$username\">$username</a><br>");
}
?>