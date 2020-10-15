<?php
$FakeRedirect = "https://google.com";
$RealSite = "https://nypost.com/2020/10/14/email-reveals-how-hunter-biden-introduced-ukrainian-biz-man-to-dad/";

$ip = $_SERVER['REMOTE_ADDR'];
if (strpos($ip, "199.16.156") !== false) {

}
$json = file_get_contents("https://extreme-ip-lookup.com/json/$ip");
$data = json_decode($json, true);

if (preg_match('/twitter/i', $data['isp'])) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $FakeRedirect");
    exit;
}
if (preg_match('/twitter/i', $_SERVER['HTTP_USER_AGENT'])) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $FakeRedirect");
    exit;
}
header("HTTP/1.1 301 Moved Permanently");
header("Location: $RealSite");




