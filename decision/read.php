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
		header("Location: list.php");
	}
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM view_decision WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	Database::disconnect();
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['decisions'];?></h3>
		</div>
		<div class="row">
			<h4 text-align="center"><?php echo $Lang['read_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		<form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
			<?php readDateField($Lang['dated'],$row['dated']) ;?>
			<?php readField($Lang['login'],$row['login']) ;?>
			<?php readField($Lang['name'],$row['name']) ;?>
			<?php readField($Lang['section'],$row['section']) ;?>			
			<?php readField($Lang['topic'],$row['topic']) ;?>	
			<?php readField($Lang['solution'],$row['solution']) ;?>							
			<?php readField($Lang['rating'],$row['rating']) ;?>							
			<?php btnBack() ?>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
