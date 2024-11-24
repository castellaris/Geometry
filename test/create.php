<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
// Если это не менеджер - то вход запрещен
if ($manager == 0) {
	header("location: /Geometry/login.php");
}
?>
<?php
	if ( !empty($_POST)) {
		// Отслеживание ошибок проверки
		$message = null;
		// Сохранять значения отслеживаемых полей
		$title = $_POST['title'];
		$minute = $_POST['minute'];
		$rate = $_POST['rate'];
		// Проверка ввода
		$valid = true;
		if (empty($title)) {
			$message =	$message.$Lang['enter'].' '.$Lang['title'].' ';
			$valid = false;
		}
		if (empty($minute)) {
			$message =	$message.$Lang['enter'].' '.$Lang['minute'].' ';
			$valid = false;
		}
		if (empty($rate)) {
			$message =	$message.$Lang['enter'].' '.$Lang['rate'].' ';
			$valid = false;
		}		
		// Вставка данных
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO test (title,minute,rate) values(?,?,?)";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($title,$minute,$rate));
				Database::disconnect();
				header("Location: index.php");
			}
			catch (Exception $e) {
				$message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
			}
		}
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3><?php echo $Lang['test'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['create_new'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="create.php" method="post">
			<?php inputText($Lang['title'], 'title', !empty($title)?$title:null, null, "text", "80" ) ?>
			<?php inputNumber($Lang['minute'], 'minute', !empty($minute)?(int)$minute:10, !empty($totalError)?$totalError:null, "1", "90", "1") ?>
			<?php inputNumber($Lang['rate'], 'rate', !empty($rate)?(int)$rate:75, !empty($totalError)?$totalError:null, "1", "100", "1") ?>			
			<br>
			<?php btnCreateBack() ?>
		</form>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
