<?php
include_once( 'config.php' );
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else {
    $tran_id = $a['pg_txnid']??'';
    $mer_txnid = $a['mer_txnid']??'';
    $amount = $a['amount']??'';
    $cus_name = $a['cus_name']??'';
    $cus_email = $a['cus_email']??'';
    $cus_add1 = $a['opt_a']??'';
    $cus_add2 = $a['opt_b']??'';
    $cus_city = $a['opt_c']??'';
    $cus_state = $a['opt_d']??'';
    $cus_phone = $a['cus_phone']??'';
    $desc = $a['desc']??'';
    $pay_status = $a['pay_status']??'';
    $status_code = $a['status_code']??'';
    $cardnumber = $a['cardnumber']??'';
    $approval_code = $a['approval_code']??'';
    $payment_processor = $a['payment_processor']??'';
    $bank_trxid = $a['bank_trxid']??'';
    $payment_type = $a['payment_type']??'';
    $error_code = $a['error_code']??'';
    $date_processed = $a['date_processed']??'';
    $processing_charge = $a['processing_charge']??'';
    $ip = $a['ip']??'';
    $verify_status = $a['verify_status']??'';

    if($tran_id && $mer_txnid && $amount && $cus_name && $cus_email && $cus_add1 && $cus_add2 && $cus_city && $cus_state && $cus_phone && $desc && $pay_status && $status_code && $cardnumber && $approval_code && $payment_processor && $bank_trxid && $payment_type && $error_code && $date_processed && $processing_charge && $ip && $verify_status){

        $query = "INSERT INTO `payment`(`tran_id`, `mer_txnid`, `amount`, `cus_name`, `cus_email`, `cus_add1`, `cus_add2`, `cus_city`, `cus_state`, `cus_phone`, `description`, `pay_status`, `status_code`, `cardnumber`, `approval_code`, `payment_processor`, `bank_trxid`, `payment_type`, `error_code`, `date_processed`, `processing_charge`, `ip`, `verify_status`) VALUES ('{$tran_id}','{$mer_txnid}','{$amount}','{$cus_name}','{$cus_email}','{$cus_add1}','{$cus_add2}','{$cus_city}','{$cus_state}','{$cus_phone}','{$desc}','{$pay_status}','{$status_code}','{$cardnumber}','{$approval_code}','{$payment_processor}','{$bank_trxid}','{$payment_type}','{$error_code}','{$date_processed}','{$processing_charge}','{$ip}','{$verify_status}')";

        // mysqli_query($connection,$query);


echo "<pre>Debug: $query</pre>\n";
$result = mysqli_query($connection, $query);
if ( false===$result ) {
    printf("error: %s\n", mysqli_error($connection));
}
else {
    echo 'done.';
}
die();



    }
}



// echo "<pre>Debug: $query</pre>\n";
// $result = mysqli_query($connection, $query);
// if ( false===$result ) {
//     printf("error: %s\n", mysqli_error($connection));
// }
// else {
//     echo 'done.';
// }
// die();