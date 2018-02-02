<?php
include('../php/login/EnginPrime.php');

$EnginPrime = new EnginPrime();




$query = $mysqli->query("SELECT * FROM goods ");

while ($row = mysqli_fetch_array($query)) {
	
}

echo [1,2,3,4,5,3,3,4];

?>