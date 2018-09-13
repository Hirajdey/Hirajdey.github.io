<?php
$first_name = "Vikas Kumar";
$surl = "https://www.medgenome.com/payment-success/";
$phone = "9999999999";
$key = "XQjgSg";
$curl = "https://www.medgenome.com/contact/";
$furl = "https://www.medgenome.com/publications/";
//$txnid = "PLS-10061-3";
$txnid = "PLS-10061-6";
$productinfo = "SAU Admission 2014";
$amount = "600.000";
$email = "vikaskumarsre@gmail.com";
$salt = "yCuuQz93";

$data = $key."|".$txnid."|".$amount."|".$productinfo."|".$first_name."|".$email."|||||||||||".$salt;
$hashed = hash('sha512', $data);
?>
<html>
<head>
</head>
<body>
<form action='https://test.payu.in/_payment' method='post'>
	<input type="hidden" name="firstname" value="<?php echo $first_name;?>" />
	<input type="hidden" name="lastname" value="" />
	<input type="hidden" name="surl" value="<?php echo $surl;?>" />
	<input type="hidden" name="phone" value="<?php echo $phone;?>" />
	<input type="hidden" name="key" value="<?php echo $key;?>" />
	<input type="hidden" name="hash" value = "<?php echo $hashed;?>"/>
	<input type="hidden" name="curl" value="<?php echo $curl;?>" />
	<input type="hidden" name="furl" value="<?php echo $furl;?>" />
	<input type="hidden" name="txnid" value="<?php echo $txnid;?>" />
	<input type="hidden" name="productinfo" value="<?php echo $productinfo;?>" />
	<input type="hidden" name="amount" value="<?php echo $amount;?>" />
	<input type="hidden" name="email" value="<?php echo $email;?>" />
	<input type= "submit" value="Pay">
</form>
</body></html>