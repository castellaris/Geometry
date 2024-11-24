<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php
// Если это не администратор - то вход запрещен
if ($admin == 0) {
	header("location: /Geometry/login.php");
}

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	try {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Проверяем, есть ли у пользователя связанные задания
		$sql_check_tasks = "SELECT COUNT(*) FROM decision WHERE usersid = ?";
		$stmt_check_tasks = $pdo->prepare($sql_check_tasks);
		$stmt_check_tasks->execute(array($id));
		$tasks_count = $stmt_check_tasks->fetchColumn();

		if ($tasks_count > 0) {
			$message = "Нельзя аннулировать пользователя, пока у него есть незавершенные тестовые и лабораторные задания.";
		} else {
			// Удаляем пользователя
			$sql_delete_user = "DELETE FROM users WHERE id=?";
			$stmt_delete_user = $pdo->prepare($sql_delete_user);
			$stmt_delete_user->execute(array($id));
			header("Location: index.php");
		}

		Database::disconnect();
	} catch (Exception $e) {
		$message = "Ошибка: " . utf8_encode($e->getMessage());
	}
}
?>
<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: " . $message . "</p>";} ?>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
