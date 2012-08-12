<?php
require "../Services/fullcourt.php";

$from= $_REQUEST['sender']; 
$to= $_REQUEST['number'];
$body = $_REQUEST['msg'];

$auth_id = "FCabcdefghijklmnopqrstuvwxyz123456";
$auth_token = "1234567890qwertyuiosdfghjklxcvbnmd";

$p = new RestAPI($auth_id, $auth_token);

// Send SMS
$params = array(
      'To' => $to,
      'From' => $from,
      'Body' => $body
);
$response = $p->send_message($params);

$msg = urlencode("Sent Message to ".$from);
header("Location: index.html?msg=$msg");
?>
