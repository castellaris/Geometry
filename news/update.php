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
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	if ( null==$id ) {
		header("Location: index.php");
	}
	if ( !empty($_POST)) {
		// Отслеживание ошибок проверки
		$message = null;
		// Старое значение photo, mime
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM news where id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($id));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$photo = $row['photo'];
		$mime = $row['mime'];
		Database::disconnect();
		// Сохранять значения отслеживаемых полей
		$daten = $_POST['daten'];
		$title = $_POST['title'];
		$details = nl2br($_POST['details']);
		//$photo = $_POST['photo'];;
		//$mime = $_POST['mime'];;
		$imageProperties = null;
		$imageSizeByte = null;
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
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
		// UPDATE data
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "UPDATE news SET daten=?,title=?,details=?,photo=?,mime=? WHERE id=?";
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(1, $daten);
				$stmt->bindParam(2, $title);
				$stmt->bindParam(3, $details);
				$stmt->bindParam(4, $photo, PDO::PARAM_LOB);
				$stmt->bindParam(5, $mime);
				$stmt->bindParam(6, $id);
				$stmt->execute();
				Database::disconnect();
				header("Location: index.php");
			}
			catch (Exception $e) {
				$message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
			}
		}
	}
	else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM news where id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($id));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$daten = $row['daten'];
		$title = $row['title'];
		$details = preg_replace('/\<br(\s*)?\/?\>/i', "", $row['details']);
		$photo = $row['photo'];
		$mime = $row['mime'];
		Database::disconnect();
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row justify-content-center">
			<h3><?php echo $Lang['news'];?></h3>
		</div>
		<div class="row justify-content-center">
			<h4><?php echo $Lang['update_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="update.php?id=<?php echo $id?>" method="post">
			<?php inputText($Lang['daten'], 'daten', !empty($daten)?date("Y-m-d H:i:s" , strtotime($daten)):date("Y-m-d H:i:s"), !empty($datenError)?$datenError:null, "text", "50" ) ?>
			<?php inputText($Lang['news_title'], 'title', !empty($title)?$title:null, !empty($titleError)?$titleError:null, "text", "75" ) ?>
			<?php inputTextArea($Lang['news_details'], 'details', !empty($details)?$details:null, !empty($detailsError)?$detailsError:null, "75", "7" ) ?>
			<?php readImg($Lang['photo'],$row['photo'],$row['mime']) ;?>
			<?php inputImage($Lang['photo'], 'userImage', !empty($photo)?$photo:null, !empty($photoError)?$photoError:null) ?>
			<br>
			<?php btnUpdateBack() ?>
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
