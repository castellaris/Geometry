<?php
	// Счетчик посещений
	// Получаем текущую дату
	$datev = date("Y-m-d H:i:s");
	// Получаем IP-адрес посетителя 
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$visitor_ip=$_SERVER['HTTP_CLIENT_IP'];
	}
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$visitor_ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
		$visitor_ip=$_SERVER['REMOTE_ADDR'];
	}
	// Получаем логин
	if(isset($_SESSION["session_login"])) {	
		$visitor_login = $_SESSION["session_login"];
	}
	else {
		$visitor_login = "Not registered";
	}
	// Получаем страницу
	$visitor_uri = $_SERVER['REQUEST_URI'];
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO visits (datev,visitor_ip,visitor_login,visitor_uri) values(?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($datev,$visitor_ip,$visitor_login,$visitor_uri));
	Database::disconnect();
?>