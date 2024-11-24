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
		if (isset ($_POST['testid'])) $testid = $_POST['testid'];
		$question = $_POST['question'];	
		$photo = null;
		$mime = null;
		$imageProperties = null;
		$imageSizeByte = null;
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			//$photo = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
			$photo = file_get_contents($_FILES['userImage']['tmp_name']);
			$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
			$mime = $imageProperties['mime'];
			$imageSizeByte = filesize($_FILES['userImage']['tmp_name']);
		}		
		$reply1 = $_POST['reply1'];		
		if (empty($reply1)) {
			$reply1 = null;
			$ok1 = 0;						
		}
		else {			
			if (isset($_POST['ok1'])) {
				$ok1 = true;
			}	
			else {
				$ok1 = 0;
			}				
		}
		$reply2 = $_POST['reply2'];
		if (empty($reply2)) {
			$reply2 = null;
			$ok2 = 0;						
		}
		else {			
			if (isset($_POST['ok2'])) {
				$ok2 = true;
			}	
			else {
				$ok2 = 0;
			}			
		}
		$reply3 = $_POST['reply3'];
		if (empty($reply3)) {
			$reply3 = null;
			$ok3 = 0;						
		}
		else {			
			if (isset($_POST['ok3'])) {
				$ok3 = true;
			}			
			else {
				$ok3 = 0;
			}
		}
		$reply4 = $_POST['reply4'];
		if (empty($reply4)) {
			$reply4 = null;
			$ok4 = 0;						
		}
		else {			
			if (isset($_POST['ok4'])) {
				$ok4 = true;
			}		
			else {
				$ok4 = 0;
			}
		}
		$reply5 = $_POST['reply5'];
		if (empty($reply5)) {
			$reply5 = null;
			$ok5 = 0;						
		}
		else {			
			if (isset($_POST['ok5'])) {
				$ok5 = true;
			}		
			else {
				$ok5 = 0;
			}			
		}			
		// Проверка ввода
		$valid = true;
		if (empty($testid)) {
			$message =	$message.$Lang['enter'].' '.$Lang['test'].' ';
			$valid = false;
		}
		if (empty($question)) {
			$message =	$message.$Lang['enter'].' '.$Lang['question'].' ';
			$valid = false;
		}
		if ((empty($reply1)) && (empty($reply2)) && (empty($reply3)) && (empty($reply4)) && (empty($reply5)) ) {
			$message =	$message.$Lang['enter'].' '.$Lang['reply'].' ';
			$valid = false;
		}
		if ($imageSizeByte>102400) {
			$message = 'Превышен размер файла, надо 100 кБ, размер файла в байтах '.$imageSizeByte;
			$valid = false;
		}
		// Вставка данных
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO question (testid,question,photo,mime,reply1,ok1,reply2,ok2,reply3,ok3,reply4,ok4,reply5,ok5) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(1, $testid);
				$stmt->bindParam(2, $question);
				$stmt->bindParam(3, $photo, PDO::PARAM_LOB);
				$stmt->bindParam(4, $mime);
				$stmt->bindParam(5, $reply1);
				$stmt->bindParam(6, $ok1);
				$stmt->bindParam(7, $reply2);
				$stmt->bindParam(8, $ok2);
				$stmt->bindParam(9, $reply3);
				$stmt->bindParam(10, $ok3);
				$stmt->bindParam(11, $reply4);
				$stmt->bindParam(12, $ok4);
				$stmt->bindParam(13, $reply5);
				$stmt->bindParam(14, $ok5);
				$stmt->execute();
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
	<div class="container" style="display: inline-block;">
			<h3><?php echo $Lang['question'];?></h3>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['create_new'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="create.php" method="post">
			<hr/>
			<?php inputSelect($Lang['test'], 'testid', !empty($testid)?$testid:null, null, "SELECT id, title FROM test ORDER BY title", "400px" ); ?>
			<hr/>
			<?php inputTextArea($Lang['question'], 'question', !empty($question)?$question:null, null, "80", "6" ) ?>
			<?php inputImage($Lang['photo'], 'userImage', !empty($photo)?$photo:null, null) ?>
			<hr/>
			<?php inputTextArea($Lang['reply1'], 'reply1', !empty($reply1)?$reply1:null, null, "80", "5" ) ?>
			<?php inputCheckBox($Lang['ok1'], 'ok1', 0, null) ?>
			<hr/>
			<?php inputTextArea($Lang['reply2'], 'reply2', !empty($reply2)?$reply2:null, null, "80", "5" ) ?>
			<?php inputCheckBox($Lang['ok2'], 'ok2', 0, null) ?>
			<hr/>
			<?php inputTextArea($Lang['reply3'], 'reply3', !empty($reply3)?$reply3:null, null, "80", "5" ) ?>
			<?php inputCheckBox($Lang['ok3'], 'ok3', 0, null) ?>
			<hr/>
			<?php inputTextArea($Lang['reply4'], 'reply4', !empty($reply4)?$reply4:null, null, "80", "5" ) ?>
			<?php inputCheckBox($Lang['ok4'], 'ok4', 0, null) ?>
			<hr/>
			<?php inputTextArea($Lang['reply5'], 'reply5', !empty($reply5)?$reply5:null, null, "80", "5" ) ?>
			<?php inputCheckBox($Lang['ok5'], 'ok5', 0, null) ?>
			<hr/>
			<br>
			<?php btnCreateBack() ?>
		</form>
	</div> <!-- /container -->
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
