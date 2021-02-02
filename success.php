<?php

if($_POST['pay_status']=="Successful"){
    $merTxnId= $_POST['mer_txnid']; 
}

$curl_handle=curl_init();
curl_setopt($curl_handle,CURLOPT_URL,"https://sandbox.aamarpay.com/api/v1/trxcheck/request.php?request_id=$merTxnId&store_id=aamarpay&signature_key=28c78bb1f45112f5d40b956fe104645a &type=json");

curl_setopt($curl_handle, CURLOPT_VERBOSE, true);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);
$a = (array)json_decode($buffer);
echo "<pre>";
print_r($a);
echo "</pre>";

// $a['status_code'];

include('query.php');

?>