<?php 
function save($data)
{
	$date = date("YMd");
	$path = 'access-logs/' . $date . '.log';
	file_put_contents($path, $data . '\n', FILE_APPEND);
}

$ip = $_SERVER['REMOTE_ADDR'];
$ipCode = substr($ip, -6);
$hash = md5($ipCode);
$hashCode = substr($hash, -16);
save($hashCode);
?>