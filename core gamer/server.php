<?php 

	$username =	"";
	$email 	=	"";
	$errors = array();
	
	//database bağlanma

	$db = mysql_connect('localhost', 'root', '', 'registration');


	//kayıt butonuna basılırsa


	if (isset($P_POST['register.php'])) {
		$username =	mysql_real_escape_string($P_POST['username']);
		$email = mysql_real_escape_string($P_POST['email']);
		$password_1 = mysql_real_escape_string($P_POST['password_1']);
		$password_2	= mysql_real_escape_string($P_POST['password_2']);
	}


	if (empty($username)) {
		
		array_push($errors, "Kullanıcı adı gerekli!");
	}
	if (empty($email)) {
		
		array_push($errors, "E-posta gerekli!");
	}

	if (empty($password_1)) {
		
		array_push($errors, "Şifresiz bir şey yapamassın!!");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "Şifreler birbiriyle çakışmıyor?");
	}

	//kayıt olursa

	if (count($errors) == 0) {
		$password = md5($password_1);
		$sql = "INSERT INTO users (username, email, password) 
					VALUES ('$username', '$email', 'password')";

		mysql_query($db, $sql);				
	}

 ?>