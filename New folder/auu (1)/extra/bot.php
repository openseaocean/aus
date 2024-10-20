<?php 
/*

# Author               9ouraydess

*/
function tm($token,$userid,$data){
    $website="https://api.telegram.org/bot".$token."/SendMessage";
    $params = array(
        'chat_id' => $userid,
        'text' => $data
    );
    $ch = curl_init($website);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

?>