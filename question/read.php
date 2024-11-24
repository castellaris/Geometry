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
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM view_question WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['questions'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['read_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<div class="form-horizontal" >
			<hr/>
			<?php readField($Lang['title'],$row['title']) ;?>
			<hr/>
			<?php readField($Lang['question'],$row['question']) ;?>
			<?php readImg($Lang['photo'],$row['photo'],$row['mime']) ;?>
			<hr/>
			<?php readField($Lang['reply1'],'<br>'.$row['reply1']) ;?>
			<?php readCheckBox($Lang['ok1'],$row['ok1']) ;?>
			<hr/>
			<?php readField($Lang['reply2'],'<br>'.$row['reply2']) ;?>
			<?php readCheckBox($Lang['ok2'],$row['ok2']) ;?>
			<hr/>
			<?php readField($Lang['reply3'],'<br>'.$row['reply3']) ;?>
			<?php readCheckBox($Lang['ok3'],$row['ok3']) ;?>
			<hr/>
			<?php readField($Lang['reply4'],'<br>'.$row['reply4']) ;?>
			<?php readCheckBox($Lang['ok4'],$row['ok4']) ;?>
			<hr/>
			<?php readField($Lang['reply5'],'<br>'.$row['reply5']) ;?>
			<?php readCheckBox($Lang['ok5'],$row['ok5']) ;?>
			<hr/>
			<br>
			<?php btnBack() ?>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
