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
		// UPDATE data
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadpath)) { //перемещение загруженного файла из временной папки сервера в папку, которую указали (uploadpath)									
					//Удалить старый файл
					if (unlink($_SESSION['uploadpath_old'])) {
						//echo "Файл удален"; 
					} 
					else { 
						//echo "Ошибка при удалении файла"; 
					}
					$sql = "UPDATE manual SET datem=?,languageid=?,title=?,details=?,usersid=?,uploadname=?,uploadpath=? WHERE id=?";
					$stmt = $pdo->prepare($sql);
					$stmt->execute(array($datem,$languageid,$title,$details,$usersid,$uploadname,$uploadpath,$id));
				}
				else {
					$sql = "UPDATE manual SET datem=?,languageid=?,title=?,details=?,usersid=? WHERE id=?";
					$stmt = $pdo->prepare($sql);
					$stmt->execute(array($datem,$languageid,$title,$details,$usersid,$id));
				}
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
		$sql="SELECT * FROM manual where id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($id));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$datem = $row['datem'];
		$languageid = $row['languageid'];
		$title = $row['title'];
		$details = $row['details'];
		$usersid = $row['usersid'];
		$uploadname = $row['uploadname'];
		$uploadpath = $row['uploadpath'];
		// Запомнить uploadpath
		$_SESSION['uploadpath_old'] = $uploadpath;
		Database::disconnect();
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['manual'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['update_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" action="update.php?id=<?php echo $id?>" method="post">
			<?php inputText($Lang['datem'], 'datem', !empty($datem)?date("Y-m-d" , strtotime($datem)):date("Y-m-d"), null, "date", "50" ) ?>
			<?php inputSelect($Lang['language'], 'languageid', !empty($languageid)?$languageid:null, null, "SELECT id,title FROM language ORDER BY title", "600px" ); ?>
			<?php inputText($Lang['title'], 'title', !empty($title)?$title:null, null, "text", "120" ) ?>
			<?php inputTextArea($Lang['details'], 'details', !empty($details)?$details:null, null, "120", "7" ) ?>
			<?php readField($Lang['uploadname'],$row['uploadname']) ;?>
			<?php inputFile($Lang['uploadname'], 'uploadfile', !empty($uploadname)?$uploadname:null, null, "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*") ?>				
			<br>
			<?php btnUpdateBack() ?>
		</form>
	</div> <!-- /container -->	
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>	
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
