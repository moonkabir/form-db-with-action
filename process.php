<?php
error_reporting(0); //warning hide

$amount = $_POST['amount']??'';
$cus_name = $_POST['cus_name']??'';
$cus_email = $_POST['cus_email']??'';
$cus_add1 = $_POST['cus_add1']??'';
$cus_add2 = $_POST['cus_add2']??'';
$cus_city = $_POST['cus_city']??'';
$cus_state = $_POST['cus_state']??'';
$cus_postcode = $_POST['cus_postcode']??'';
$cus_country = $_POST['cus_country']??'';
$cus_phone = $_POST['cus_phone']??'';

function rand_string( $length ) {
	$str="";
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++) { $str .= $chars[ rand( 0, $size - 1 ) ]; }
	return $str;
}

function redirect_to_merchant($url) {

	?>
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head><script type="text/javascript">
        function closethisasap() { document.forms["redirectpost"].submit(); } 
      </script></head>
      <body onLoad="closethisasap();">
      
        <form name="redirectpost" method="post" action="<?php echo 'https://sandbox.aamarpay.com/'.$url; ?>"></form>
      </body>
    </html>
    <?php	
    exit;
} 

$cur_random_value=rand_string(10);


$url = 'https://sandbox.aamarpay.com/request.php';
$fields = array(
    'store_id' => 'aamarpay', 'amount' => $amount, 'payment_type' => 'VISA',
    'currency' => 'BDT', 'tran_id' => $cur_random_value,
    'cus_name' => $cus_name, 'cus_email' => $cus_email,
    'cus_add1' => $cus_add1, 'cus_add2' => $cus_add2,
    'cus_city' => $cus_city, 'cus_state' => $cus_state, 'cus_postcode' => $cus_postcode,
    'cus_country' => $cus_country, 'cus_phone' => $cus_phone,
    'cus_fax' => 'Not¬Applicable', 'ship_name' => 'imtiaz',
    'ship_add1' => 'House B-121, Road 21', 'ship_add2' => 'Mohakhali',
    'ship_city' => 'Dhaka', 'ship_state' => 'Dhaka',
    'ship_postcode' => '1212', 'ship_country' => 'Bangladesh',
    'desc' => 'test', 'success_url' => 'http://localhost/aamarpay-curl/success.php',
    'fail_url' => 'http://localhost/edu/fail.php',
    'cancel_url' => 'http://localhost/edu/cancel.php',
    'opt_a' => $cus_add1, 'opt_b' => $cus_add2,
    'opt_c' => $cus_city, 'opt_d' => $cus_state,
    'signature_key' => '28c78bb1f45112f5d40b956fe104645a');
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
$fields_string = rtrim($fields_string, '&'); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_POST, count($fields)); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));	
curl_close($ch); 

redirect_to_merchant($url_forward);

?>