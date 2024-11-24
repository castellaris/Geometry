<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
// Если это не администратор - то вход запрещен
if ($admin == 0) {
	header("location: /Geometry/login.php");
}
?>
<?php
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	if ( null==$id ) {
		header("location: index.php");
	}
	if ( !empty($_POST)) {
		// Отслеживание ошибок проверки
		$message = null;
		// Сохранять значения отслеживаемых полей
		$login = $_POST['login'];
		$password = $_POST['password'];
		$admin = 0;
		if (isset($_POST['admin'])) {
			$admin = true;
		};
		$manager = 0;
		if (isset($_POST['manager'])) {
			$manager = true;
		};
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
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
		// UPDATE data
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "UPDATE users SET login=?,password=?,admin=?,manager=?,name=?,email=?,phone=? WHERE id=?";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($login,$password,$admin,$manager,$name,$email,$phone,$id));
				Database::disconnect();
				header("location:index.php");
			}
			catch (Exception $e) {
				$message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
			}
		}
	}
	else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM users WHERE id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($id));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$login = $row['login'];
		$password = $row['password'];
		$admin = $row['admin'];
		$manager = $row['manager'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		Database::disconnect();
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3><?php echo $Lang['users'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['update_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
			<?php inputText($Lang['user_login'], 'login', !empty($login)?$login:null, null, "text", "50" ) ?>
			<?php inputText($Lang['password'], 'password', !empty($password)?$password:null, null, "password", "50" ) ?>
			<?php inputCheckBox($Lang['admin'], 'admin', !empty($admin)?1:0, null) ?>
			<?php inputCheckBox($Lang['manager'], 'manager', !empty($manager)?1:0, null) ?>
			<?php inputText($Lang['name2'], 'name', !empty($name)?$name:null, null, "text", "50" ) ?>
			<?php inputText($Lang['email'], 'email', !empty($email)?$email:null, null, "email", "50" ) ?>
			<?php inputText($Lang['phone'], 'phone', !empty($phone)?$phone:null, null, "text", "50" ) ?>
			<br>
			<?php btnUpdateBack() ?>
		</form>		
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
