<?php
//connectcash integration sample
$secrete_key='SECRET-P007wQnvLDncy2TTFp2x2pzmDA8dRdht';
$reference_Key='27';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://cash.connectyu.com/api/payment/merchant/verify/'.$reference_Key.'/'.$secrete_key);
$result = curl_exec($ch);
curl_close($ch);
$obj=json_decode($result, true);
if (array_key_exists("data", $obj)  && ($obj["status"] == "success")) {
    echo 'success';
    var_dump($obj);
}
