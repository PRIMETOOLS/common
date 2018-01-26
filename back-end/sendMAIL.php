<?php

#check new message users in chat
#PRIMETOOLS
#Andrey shsh


$result;
$user;


$mysqli = #connect mysqli
$queryUsers = $mysqli->query("SET NAMES 'utf8'");
$queryUsers = $mysqli->query("SELECT * FROM hash ORDER BY name DESC");

$queryMessage = $mysqli->query("SET NAMES 'utf8'");
$queryMessage = $mysqli->query("SELECT * FROM messages WHERE grup = 'usersPrimeTools'
");
while($rowsr = mysqli_fetch_array($queryMessage)){
	$user = $rowsr['user'];
}

#echo $user;
while($row = mysqli_fetch_array($queryUsers)){
	if(trim($user) == trim($row['name'])) { $result = true; break;} else {$result = false;}
}


if($result == false)
{
	mailPrimeTools($user);
	echo 'нужно отправить новое оповещенеи!';
	echo randCode();
}


function randCode()
{	
	$h = date("H");
	$m = date("i");
	
	#
	$r = rand($h, $m);
	#

	#generations hash
	$hash = md5($r)


	return $r;
}


function mailPrimeTools($user)
{
	#mail("mail", "subject", "message");
}

?>
