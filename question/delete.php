<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php
// Если это не администратор - то вход запрещен
if ($manager == 0) {
	header("location: /Geometry/login.php");
}
?>
<?php
	$id = 0;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	try {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM question WHERE id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($id));
		echo $sql;
		Database::disconnect();
		header("Location: index.php");
	}
	catch (Exception $e) {
		$message = "Ошибка: ".utf8_encode($e->getMessage());
	}	
?>
<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
