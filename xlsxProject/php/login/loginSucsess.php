<?php
$login = '123';#$_POST['login'];
$pass = '1332';#$_POST['pass'];

class Data
{
	function reStr($login,$pass)
	{
		$staf_login = htmlentities($login);
		$staf_pass = htmlentities($pass);

		$stafe__login = preg_replace('![^\w\d\s]*!','',$staf_login);
		$staf__pass = preg_replace('![^\w\d\s]*!','',$staf_pass);

		$stack = array('login' => $stafe__login, 'pass' => $staf__pass);

		return $stack;
	}

	function sql($stack)
	{	
		#переменная валидности
		$data_sucsess = false;
		#переменная валидности

		#запрос вывода логина и пароля пользователя
		$check_query = 'SELECT * FROM users WHERE login = "'.$stack['login'].'" AND "'.$stack['pass'].'"';
		#запрос вывода логина и пароля пользователя


		#добавляем коннект
		include('./connect.php');
		#добавляем коннект

		#исполняем QUERY
		$lo_and_pass_chek = $mysqli->query($check_query);
		#исполняем QUERY

		#проверяем соотведствие
		while($row = mysqli_fetch_array($lo_and_pass_chek))
		{	
			if($row['login'])
			{
				$data_sucsess = true;
			}else{
				$data_sucsess = false;
			}
		}
		#проверяем соотведствие

		return $data_sucsess;
	}

	function random_hash($login)
	{
		$random = rand(10000000,99999999999999);
		$m = $login.$random.$login;
		$newHash = md5($m);

		return $newHash;
	}
}

#object
$data = new Data();
#object


$prepared_data = $data->reStr($login,$pass);
#$data_checking_sql = $data->sql($prepared_data);
$t = $data->random_hash('ads');
echo $t;

?>