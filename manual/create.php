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
		$datem = $_POST['datem'];
		if (isset ($_POST['languageid'])) $languageid = $_POST['languageid'];
		$title = $_POST['title'];
		$details = $_POST['details'];
		$usersid = $_SESSION['usersid'];
		$uploadname=basename($_FILES['uploadfile']['name']);// записываем имя файла
		$uploadname=rus2translit($uploadname);				// Транслитерация имени файла
		$uploadpath='../files/'.$uploadname; //указываем куда грузить файл
		// Проверка ввода
		$valid = true;
		if (empty($datem)) {
			$message =	$message.$Lang['enter'].' '.$Lang['datem'].' ';
			$valid = false;
		}
		if (empty($languageid)) {
			$message =	$message.$Lang['enter'].' '.$Lang['language'].' ';
			$valid = false;
		}
		if (empty($title)) {
			$message =	$message.$Lang['enter'].' '.$Lang['title'].' ';
			$valid = false;
		}
		if (empty($usersid)) {
			$message =	$message.$Lang['enter'].' '.$Lang['usersid'].' ';
			$valid = false;
		}		
		// Вставка данных
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadpath)) { //перемещение загруженного файла из временной папки сервера в папку, которую указали (uploadpath)
					$sql = "INSERT INTO manual (datem,languageid,title,details,usersid,uploadname,uploadpath) values(?,?,?,?,?,?,?)";
					$stmt = $pdo->prepare($sql);
					$stmt->execute(array($datem,$languageid,$title,$details,$usersid,$uploadname,$uploadpath));
				}
				else {
					$sql = "INSERT INTO manual (datem,languageid,title,details,usersid) values(?,?,?,?,?)";
					$stmt = $pdo->prepare($sql);
					$stmt->execute(array($datem,$languageid,$title,$details,$usersid));				
				}
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
			<h3><?php echo $Lang['manual'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['create_new'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="create.php" method="post">
			<?php inputText($Lang['datem'], 'datem', !empty($datem)?date("Y-m-d" , strtotime($datem)):date("Y-m-d"), null, "date", "50" ) ?>
			<?php inputSelect($Lang['language'], 'languageid', !empty($languageid)?$languageid:null, null, "SELECT id,title FROM language ORDER BY title", "600px" ); ?>
			<?php inputText($Lang['title'], 'title', !empty($title)?$title:null, null, "text", "120" ) ?>
			<?php inputTextArea($Lang['details'], 'details', !empty($details)?$details:null, null, "120", "7" ) ?>
			<?php inputFile($Lang['uploadname'], 'uploadfile', !empty($uploadname)?$uploadname:null, null, "application/msword, .docx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*") ?>				
			<br>
			<?php btnCreateBack() ?>
		</form>
	</div> <!-- /container -->	
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>	
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
