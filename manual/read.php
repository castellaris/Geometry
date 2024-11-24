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
	$sql = "SELECT * FROM view_manual WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['manuals'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['read_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<div class="form-horizontal" >
			<?php readField($Lang['language'],$row['language_title']) ;?>
			<?php readField($Lang['manual'],$row['manual_title'] ) ;?>
			<?php readDateField($Lang['datem'],$row['datem']) ;?>				
			<?php readField($Lang['title'],$row['manual_title']) ;?>
			<?php readField($Lang['manual_details'],$row['details']) ;?>
			<div class="control-group"><label class="control-label"><strong><?php echo $Lang['uploadname']?>:</strong></label>  <a href="<?php echo $row['uploadpath'] ?>"><?php echo $row['uploadname']?></a></div>			
			<br>
			<?php btnBack() ?>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
