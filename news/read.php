<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
// Если это не менеджер - то вход запрещен
//if ($manager == 0) {
//	header("location:../login.php");
//}
?>
<?php
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	if ( null==$id ) {
		header("Location: /Geometry/index.php");
	}
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM news WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row justify-content-center">
			<h3><?php echo $Lang['newss'];?></h3>
		</div>
		<!--
		<div class="row justify-content-center">
			<h4><?php echo $Lang['read_record'];?> id=<?php echo $row['id'];?></h4>
		</div>
		-->
		<div class="form-horizontal" >
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-9">
							<h5 class="card-title"><?php echo  date("d.m.Y H:i", strtotime($row['daten'])) ?></h5>
							<h4 class="card-title"><?php echo $row['title'] ?></h4>
							<p class="card-text"><?php echo $row['details'] ?></p>
						</div>
						<div class="col-md-3">									
							<?php
							if($row['photo']!=null)
								echo '<img alt="photo" width="100%" src="data:'.$row['mime'].';base64,'.base64_encode($row['photo']).'">';
							?>
						</div>
					</div>
				</div>
			</div>
			<br>
			<?php btnBack() ?>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
