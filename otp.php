<?php

$otp = "";
for ($i = 0; $i < 6; $i++) {
    $key = range(0, 9);
    $otp.= $key [array_rand($key)];
}

function sendsms_post($url, array $params) {
    $params = http_build_query($params);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$url = 'http://api.smartsmssolutions.com/smsapi.php';//CHANGE TO YOUR SMS SERVICE PROVIDER
$username = "YOUR-USERNAME";
$password = "YOUR-PASSWORD";
$message = "Your one time password is " . $otp;
$senderid = "OnlineVote";
$recipients = "";
if (isset($_GET["script"])) {
    session_start();
    $recipients = $_SESSION['phone_no'];
} else {
    $recipients = $_SESSION['phone_no'];
}

$sms_array = array(
    'username' => $username,
    'password' => $password,
    'message' => $message,
    'sender' => $senderid,
    'recipient' => $recipients
);

$post_sms = sendsms_post($url, $sms_array);
if ($post_sms === "OK 1" && isset($_GET["script"])) {
    echo $otp;
} else {
    $post_sms = sendsms_post($url, $sms_array);
}
?>
