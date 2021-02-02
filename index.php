<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure pay out</title>
</head>
<body>

<?php
	date_default_timezone_set('Asia/Dhaka');
	//Generate Unique Transaction ID
	function rand_string( $length ) {
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
		$str = "";
		$size = strlen( $chars );
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;
	}
	$cur_random_value=rand_string(10);
?>

<form style='margin:0 auto; text-align:center;'  action="process.php" method="post" name="form1">
    <table border="0" cellpadding="4" cellspacing="2" align="center" style="border-collapse:collapse;">
        <tr><td>Pay Amount *</td><td><input type="number" name="amount" value="10" required> Taka</td></tr>
        <input type="text" name="currency" value="BDT">
        <tr><td>Customer Name: *</td><td><input type="text" name="cus_name" value="Mr. ABC" required></td></tr>
        <tr><td>Customer Email Address: *</td><td><input type="email" name="cus_email" value="test@test.com" required></td></tr>
        <tr><td>Customer Address Line 1: *</td><td><input type="text" name="cus_add1" value="Dhaka" required></td></tr>
        <tr><td>Customer Address Line 2: *</td><td><input type="text" name="cus_add2" value="Dhaka" required></td></tr>
        <tr><td>Customer City: *</td><td><input type="text" name="cus_city" value="Dhaka" required></td></tr>
        <tr><td>Customer State: *</td><td><input type="text" name="cus_state" value="Dhaka" required></td></tr>
        <tr><td>Customer Postal: *</td><td><input type="number" name="cus_postcode" value="1206" required></td></tr>
        <tr><td>Customer Country: *</td><td><input type="text" name="cus_country" value="Bangladesh" required></td></tr>
        <tr><td>Customer Phone: *</td><td><input type="number" name="cus_phone" value="010000000" required></td></tr>
        <tr><td><input type="submit" class='button' value="Pay_Now" name="pay"><br/></td></tr>
    </table>
</form>













    
</body>
</html>