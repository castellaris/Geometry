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
if (!empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}
if (null == $id) {
	header("Location: index.php");
}
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT id, login, password, admin, manager, name, email, phone FROM users ";
$sql = $sql . " WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($id));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
Database::disconnect();
?>
<body>
	<?php if (!empty($message)) {
		echo '<div class="alert alert-danger" role="alert">' . $message . '</div>';
	} ?>
	<div class="container">
		<div class="row">
			<h3><?php echo $Lang['users']; ?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['read_record']; ?> id=<?php echo $row['id']; ?></h4>
		</div>
		<div class="form-horizontal">
			<?php readField($Lang['user_login'], $row['login']); ?>
			<?php readField($Lang['password'], $row['password']); ?> <!-- Добавлено отображение пароля -->
			<?php readCheckBox($Lang['admin'], $row['admin']); ?>
			<?php readCheckBox($Lang['manager'], $row['manager']); ?>
			<?php readField($Lang['name'], $row['name']); ?>
			<?php readField($Lang['email'], $row['email']); ?>
			<?php readField($Lang['phone'], $row['phone']); ?>
			<br>
			<?php btnBack() ?>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
