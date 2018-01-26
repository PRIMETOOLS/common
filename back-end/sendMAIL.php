<?php

$result;	
$user;

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
	if(trim($user) == trim($row['name'])) { echo "1";} else {echo "0";}
}
?>
