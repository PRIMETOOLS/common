<?php

class EnginPrime
{	

	function reStr($str)
	{
		$staf_str = htmlentities($str);

		$stafe__str = preg_replace('![^\w\d\s]*!','',$staf_str);

		return $stafe__str;
	}

	function sql($stack)
	{	
		#переменная валидности
		$data_sucsess = false;
		#переменная валидности

		#запрос вывода логина и пароля пользователя
		#$check_query = 'SELECT * FROM users WHERE login = "'.$stack['login'].'" AND "'.$stack['pass'].'"';
		#запрос вывода логина и пароля пользователя


		#добавляем коннект
		#include('./connect.php');
		#добавляем коннект

		#исполняем QUERY
		#$lo_and_pass_chek = $mysqli->query($check_query);
		#исполняем QUERY

		#проверяем соотведствие
		#while($row = mysqli_fetch_array($lo_and_pass_chek))
		#{	
		#	if($row['login'])
		#	{
		#		$data_sucsess = true;
		#	}else{
		#		$data_sucsess = false;
		#	}
		#}
		#проверяем соотведствие

		#return $data_sucsess;
	}

	function random_hash($login)
	{
		$random = rand(10000000,99999999999999);
		$m = $login.$random.$login;
		$newHash = md5($m);

		return $newHash;
	}
	
}
?>

