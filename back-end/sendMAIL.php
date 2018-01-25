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
		#echo $row['name'];
		if($user != $row['name']){
			$result = '0';
			#echo $row['name'];
		}else{
			$result = '1';
			#echo $user,$row['name'];
		}
		if($result = '0'){
			echo '0';
		}else{
			echo '1';
		}
}
?>
