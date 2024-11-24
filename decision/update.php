<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
// Если это не менеджер - то вход запрещен
if ($manager == 0) {
	header("location:/Geometry/login.php");
}
?>
<?php
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	if ( null==$id ) {
		header("Location: index.php");
	}
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM view_decision where id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);		
	$dated = $row['dated'];
	$login = $row['login'];
	$name = $row['name'];
	$section = $row['section'];
	$topic = $row['topic'];
	$topic = $row['topic'];
	$solution = $row['solution'];
	$rating = $row['rating'];
	Database::disconnect();
		
	if ( !empty($_POST)) {
		// Отслеживание ошибок проверки
		$message = null;
		// Сохранять значения отслеживаемых полей
		$rating = $_POST['rating'];
		// Проверка ввода
		$valid = true;
		if (empty($rating)) {
			$message =	$message.$Lang['enter'].' '.$Lang['rating'].' ';
			$valid = false;
		}
		// UPDATE data
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "UPDATE decision SET rating=? WHERE id=?";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($rating,$id));
				Database::disconnect();
				header("Location: index.php");
			}
			catch (Exception $e) {
				$message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
			}
		}
	}
	else {
		
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['decision'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['update_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="update.php?id=<?php echo $id?>" method="post">
			<?php readDateField($Lang['dated'],$dated) ;?>
			<?php readField($Lang['login'],$login) ;?>
			<?php readField($Lang['name'],$name) ;?>
			<?php readField($Lang['section'],$section) ;?>			
			<?php readField($Lang['topic'],$topic) ;?>	
			<?php readField($Lang['solution'],$solution) ;?>				
			<?php inputTextArea($Lang['rating'], 'rating', !empty($rating)?$rating:null, null, "80", "7" ) ?>										
			<br>
			<?php btnUpdateBack() ?>
		</form>
	</div> <!-- /container -->	
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
