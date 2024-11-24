<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
	if(!isset($_SESSION["session_login"])) {
		header("location: /Geometry/login.php");
	} else {
?>
<?php
	// Найти usersid
	$usersid = $_SESSION['usersid'];
	if ( empty($_POST)) {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM users WHERE id = ".$usersid;
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array());
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$login = $row['login'];
		$password = $row['password'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		Database::disconnect();
	}
	else {
		// Отслеживание ошибок проверки
		$message = null;
		// Сохранять значения отслеживаемых полей
		$login=$_SESSION['session_login'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		// Проверка ввода
		$valid = true;
		if (empty($login)) {
			$message =	$message.$Lang['enter'].' '.$Lang['login'].' ';
			$valid = false;
		}
		if (empty($password)) {
			$message =	$message.$Lang['enter'].' '.$Lang['password'].' ';
			$valid = false;
		}
		if (empty($name)) {
			$message = $message.$Lang['enter'].' '.$Lang['name'].' ';
			$valid = false;
		}
		if (empty($email)) {
			$message = $message.$Lang['enter'].' '.$Lang['email'].' ';
			$valid = false;
		}
		if (empty($phone)) {
			$message = $message.$Lang['enter'].' '.$Lang['phone'].' ';
			$valid = false;
		}
		try {
			if ($valid) {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql="UPDATE users set password=?, name=?, email=?, phone=? WHERE id = ".$usersid;
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($password,$name,$email,$phone));
				Database::disconnect();
				echo '<script language="javascript">';
				echo 'if(!alert("Учетная запись успешно изменена")) window.location.href="index.php"';
				echo '</script>';
				//header("Location: index.php");
			}
		}
		catch (Exception $e) {
			$message = $sql." ".utf8_encode($e->getMessage());
		}
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<h1><?php echo $Lang['personal_area'];?></h1>
		<form name="registerform" id="registerform"	method="post">
			<?php readField($Lang['user_login'],$_SESSION['session_login']) ;?>
			<?php inputText($Lang['password'], 'password', !empty($password)?$password:null, !empty($passwordError)?$passwordError:null, "password", "50" ) ?>
			<?php inputText($Lang['name'], 'name', !empty($name)?$name:null, !empty($nameError)?$nameError:null, "text", "50" ) ?>
			<?php inputText($Lang['email'], 'email', !empty($email)?$email:null, !empty($emailError)?$emailError:null, "email", "50" ) ?>
			<?php inputText($Lang['phone'], 'phone', !empty($phone)?$phone:null, !empty($phoneError)?$phoneError:null, "text", "50" ) ?>
			<br>
			<?php btnUpdateBack() ?>
		</form>
	</div>
</body>
<?php
}
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>