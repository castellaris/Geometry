<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/navigation.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/shared.php"; ?>

<?php
if(isset($_SESSION["session_login"])){
// echo "Session is set"; // for testing purposes
	header("Location: index.php");
}
if(isset($_POST["login"])){
	if(!empty($_POST['login']) && !empty($_POST['password'])) {
		$login=$_POST['login'];
		$password=$_POST['password'];
		$pdo = Database::connect();
		$sql = "SELECT * FROM users WHERE login='".$login."' AND password='".$password."'";
		$numrows=$pdo->query($sql)->fetchColumn();
		if($numrows>0){
			foreach ($pdo->query($sql) as $row) {
				$id=$row['id'];
				$dblogin=$row['login'];
				$dbpassword=$row['password'];
			}
			if($login == $dblogin && $password == $dbpassword) {
				$_SESSION['session_login']=$login;
				// Запомнить usersid
				$_SESSION['usersid'] = $id;
				// Запомнить name
				$_SESSION['usersname'] = $row['name'];
				// Если есть страница куда надо вернуться после ввода логина и пароля или на главную страницу				
				if(isset($_SESSION["current_page"])){
					header("Location: ". $_SESSION['current_page']);
				} else {
					header("Location: index.php");
				}
			}
		} else {
				$message =	"Неправильное имя пользователя ".$login." или пароль!";
		}
		Database::disconnect();
	} else {
			$message = "Все поля обязательны для заполнения!";
	}
}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<h1><?php echo $Lang['entrance'];?></h1>
		<form name="loginform" id="loginform" action="" method="POST" class="form-group">
			<?php inputText($Lang['user_login'], 'login', null, !empty($loginError)?$loginError:null, "text", "50" ) ?>
			<?php inputText($Lang['password'], 'password', !empty($password)?$password:null, !empty($passwordError)?$passwordError:null, "password", "50" ) ?>
			<br>
			<input type="submit" name="btnlogin" class="btn btn-outline-primary" style="width:100px" value="Вход" />
			<br>
			<p class="regtext"><?php echo $Lang['not_registered_yet'];?>? <a href= "register.php"><?php echo $Lang['registration'];?></a></p>
		</form>
	</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/footer.php"; ?>
