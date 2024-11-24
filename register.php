<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/navigation.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/shared.php"; ?>
<?php
if(!empty($_POST)){
	if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) ) {
		$login=$_POST['login'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$pdo = Database::connect();
		$sql = "SELECT * FROM users WHERE login='".$login."'";
		$numrows=$pdo->query($sql)->fetchColumn();
		if($numrows==0)	{
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO users (login, password, name, email, phone) values(?, ?, ?, ?, ?)";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($login, $password, $name, $email, $phone));
				Database::disconnect();
				echo '<script language="javascript">';
				echo 'if(!alert("Учетная запись успешно создана")) window.location.href="index.php"';
				echo '</script>';
				//header("Location: index.php");
			}
			catch (Exception $e) {
				$message = $sql." ".utf8_encode($e->getMessage());
			}
		} else {
			$message = $Lang['this_login_already_exists'];
		}
		Database::disconnect();
	} else {
		$message = $Lang['all_fields_are_required'];
	}
}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
	<div class="container form-group">
		<h1><?php echo $Lang['registration'];?></h1>
		<form name="registerform" id="registerform" action="register.php" method="post">
			<?php inputText($Lang['user_login'], 'login', null, null, "text", "50" ) ?>
			<?php inputText($Lang['password'], 'password', !empty($password)?$password:null, 'autocomplete="new-password"', "password", "50" ) ?>
			<?php inputText($Lang['name'], 'name', !empty($name)?$name:null, null, "text", "80" ) ?>
			<?php inputText($Lang['email'], 'email', !empty($email)?$email:null, null, "email", "80" ) ?>
			<?php inputText($Lang['phone'], 'phone', !empty($phone)?$phone:null, null, "text", "50" ) ?>
			<br>
			<?php btnRegistrationBack() ?>		
			<p class="regtext"><?php echo $Lang['you_already_have_an_account'];?>? <a href="login.php" ><?php echo $Lang['login'];?></a>!</p>
		</form>
	</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/footer.php"; ?>
