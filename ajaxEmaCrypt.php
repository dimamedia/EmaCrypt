<?php

// use your own alphabet as a letters for lazy hashing
$numbers = array("'1"=>"q","'2"=>"w","'3"=>"e","'4"=>"r","'5"=>"t","'6"=>"y","'7"=>"u","'8"=>"i","'9"=>"o","'0"=>"p");

function mail_encrypt($str) {
	global $numbers;
	foreach($numbers as $to => $from) $str = str_ireplace($from, $to, $str);
	return base64_encode($str);
}
function mail_decrypt($str) {
	global $numbers;
	$str = base64_decode($str);
	foreach($numbers as $from => $to) $str = str_ireplace($from, $to, $str);
	return $str;
}

if($_POST['email'])	print mail_decrypt($_POST['email']);
elseif($_GET['email']) print mail_encrypt($_GET['email']);

?>
