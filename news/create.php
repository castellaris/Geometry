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
		$daten = date("Y-m-d H:i:s");
		$title = $_POST['title'];
		$details = nl2br($_POST['details']);
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
		// Проверка ввода
		$valid = true;
		if (empty($title)) {
			$message =	$message.$Lang['enter'].' '.$Lang['news_title'].' ';
			$valid = false;
		}
		if (empty($daten)) {
			$message =	$message.$Lang['enter'].' '.$Lang['daten'].' ';
			$valid = false;
		}
		if (empty($details)) {
			$message =	$message.$Lang['enter'].' '.$Lang['news_details'].' ';
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
				$sql = "INSERT INTO news (daten,title,details,photo,mime) values(?,?,?,?,?)";
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(1, $daten);
				$stmt->bindParam(2, $title);
				$stmt->bindParam(3, $details);
				$stmt->bindParam(4, $photo, PDO::PARAM_LOB);
				$stmt->bindParam(5, $mime);
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
	<div class="container">
		<div class="row justify-content-center">
			<h3><?php echo $Lang['news'];?></h3>
		</div>
		<div class="row justify-content-center">
			<h4><?php echo $Lang['create_new'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="create.php" method="post">
			<?php readDateField($Lang['daten'],date("Y-m-d")) ;?>
			<?php inputText($Lang['news_title'], 'title', !empty($title)?$title:null, null, "text", "75" ) ?>
			<?php inputTextArea($Lang['news_details'], 'details', !empty($details)?$details:null, null, "75", "7" ) ?>
			<?php inputImage($Lang['photo'], 'userImage', !empty($photo)?$photo:null, null) ?>
			<br>
			<?php btnCreateBack() ?>
		</form>
	</div> <!-- /container -->
	<script>
		document.querySelector("textarea").addEventListener('keydown',function(e) {
		if(e.keyCode === 9) { // tab was pressed
				// get caret position/selection
				var start = this.selectionStart;
				var end = this.selectionEnd;
				var target = e.target;
				var value = target.value;
				// set textarea value to: text before caret + tab + text after caret
				target.value = value.substring(0, start)
					+ "\t"
					+ value.substring(end);
				// put caret at right position again (add one for the tab)
				this.selectionStart = this.selectionEnd = start + 1;
				// prevent the focus lose
				e.preventDefault();
			}
		},false);
	</script>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
