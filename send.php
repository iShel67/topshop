<?php

// апи ключ и id веб-мастера на странице http://kz-sk.leadvertex.info/webmaster/api.html (если ранее не в вводил, введи любой ключ латиницей), данные брать отсюда по аналогии https://yadi.sk/i/i0OqCuV2bSMx2w 

$api_key = 'ishel'; 
$id_web_master = '28';   
  

$price = '13990'; 

$goodid = '181692';


 

 
 





$goodName = 'sandali chalas';






$_REQUEST['phone'] = preg_replace('/[^0-9]/', '', $_REQUEST['phone']); 

$log = date('Y-m-d H:i:s') . ' Запись в лог name='.$_REQUEST['name'].' phone='.$_REQUEST['phone'].' goodid='.$goodid;   
file_put_contents('log.txt', $log . PHP_EOL, FILE_APPEND);

$url = 'https://apiv1.tmweb.ru/leadvertex/is-double.php?goodid='.$goodid.'&phone='.$_REQUEST['phone'];
 
$headers = [];

$curl = curl_init(); 

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1); 
curl_setopt($curl, CURLOPT_POST, false); //  
curl_setopt($curl, CURLOPT_URL, $url);

$isDouble = curl_exec($curl);

if ($isDouble == 1) { 
    header('Location: form-duble.php?name=' . $_REQUEST['name'] . '&phone=' . $_REQUEST['phone']);
    exit();
}elseif ($isDouble == 2) { 
    header('Location: form-duble.php?name=' . $_REQUEST['name'] . '&phone=' . $_REQUEST['phone']);
    $additional1 = 'form-duble';
}else{
    header('Location: form-ok.php?name=' . $_REQUEST['name'] . '&phone=' . $_REQUEST['phone']. '&p=' .  $_REQUEST['p']);
}




     


if (!empty($_REQUEST['name']) && !empty($_REQUEST['phone'])) { 

    $goodList[0] = [
        'goodID' => $goodid,
        'quantity' => '1',
        'price' => $price,
    ];
      
    if(filter_var($_SERVER['HTTP_CF_CONNECTING_IP'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    elseif(filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['HTTP_CLIENT_IP'];
    elseif(filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    elseif(filter_var($_SERVER['HTTP_X_FORWARDED'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['HTTP_X_FORWARDED'];
    elseif(filter_var($_SERVER['HTTP_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    elseif(filter_var($_SERVER['HTTP_FORWARDED'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['HTTP_FORWARDED'];
    elseif(filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $ip = $_SERVER['REMOTE_ADDR'];
    if(strlen($ip)>16){$ip=long2ip(mt_rand());}         
      
    $data = array( 
        'additional1'=> $additional1,
        'externalWebmaster'=> $goodName,  
        'fio' => $_REQUEST['name'],  
        'phone' => $_REQUEST['phone'],
        'comment' => $_REQUEST['title'],   
        'domain' =>  (stristr($_SERVER['HTTP_REFERER'], '?', true) == false) ? $_SERVER['HTTP_REFERER'] :  stristr($_SERVER['HTTP_REFERER'], '?', true),        
        'utm_source'=> $_REQUEST['utm_source'],
        'utm_medium'=> $_REQUEST['utm_medium'],     
        'utm_campaign'=> $_REQUEST['utm_campaign'],     
        'utm_term'=> $_REQUEST['utm_term'], 
        'utm_content'=> $_REQUEST['utm_content'],
        'ip'=> $ip,
        'goods' => $goodList
    );

    $myCurl = curl_init();   

    curl_setopt_array($myCurl, array(
        CURLOPT_URL => 'https://kz-sk.leadvertex.ru/api/webmaster/v2/addOrder.html?webmasterID='. $id_web_master .'&token='.$api_key,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true, 
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_CONNECTTIMEOUT => '15',
    )); 
      
    $response = curl_exec($myCurl);

}