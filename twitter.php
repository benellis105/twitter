<?php
error_reporting(0);

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$user = $_GET['user'];

$consumerKey = "NlUNANXE96NMURJ6obO4BzEVW";
$consumerSecret = "xxxe8GlazvOzhq8zg5C2DJo1jeJlaZ1LqJQoE0LsYT1QfEhpYm";
$accessToken = "853063655037878273-ICSj05GFpsfdpcWwliyMLyHJgCkmID2";
$accessTokenSecret = "eCuQPr5nRip4MRLd17jzaAmA9Z8fNzAHWZt8GJqraWzyo";

$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$statuses = $connection->get("friends/list", ["screen_name" => $user, "count" => 200]);
for ($i=0; $i < count($statuses->users); $i++) {
    $username = $statuses->users[$i]->screen_name;
    echo ("<a href=\"https://www.twitter.com/$username\">$username</a><br>");
}
?>