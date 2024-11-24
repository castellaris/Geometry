<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
	if(!isset($_SESSION["session_login"])) {
		header("location: /Geometry/login.php");
	} else {
?>
<?php
	$usersid = $_SESSION['usersid'];
	
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
	<div class="container">
		<div class="row" style="justify-content:center">
			<h3><?php echo $_SESSION['usersname'];?></h3>
		</div>
		<div class="row" style="justify-content:center">
			<h4><?php echo $Lang['my_decisions'];?></h4>
		</div>
		<div class="row">
			<div class="table-container" style="overflow-x: auto; width: 100%;">
				<table id="myTable" class="cell-border hover stripe" style="width:100%;">
					<thead>
						<tr>
							<th><?php echo $Lang['dated'];?></th>
							<th><?php echo $Lang['topic'];?></th>
							<th><?php echo $Lang['answer'];?></th>
							<th><?php echo $Lang['rating'];?></th>						
						</tr>
					</thead>
					<tbody>
						<?php
							$pdo = Database::connect();
							$sql = "SELECT * FROM view_decision WHERE usersid=".$usersid." ORDER BY dated";
							foreach ($pdo->query($sql) as $row) {
								echo '<tr>';
								echo '<td>'.date("d.m.Y H:i", strtotime($row['dated'])).'</td>';
								echo nl2br('<td>'. $row['section']. PHP_EOL . $row['topic'].'</td>');							
								echo '<td>'. $row['solution'].'</td>';		
								echo '<td>'. $row['rating'].'</td>';		
								echo '</tr>';
							}
							Database::disconnect();
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" style="justify-content:center">
			<h4 text-align="center"><?php echo $Lang['protocol_test'];?></h3>
		</div>
		<div class="row">
			<div class="table-container" style="overflow-x: auto; width: 100%;">
				<table id="myTable2" class="display" style="width:100%;">
					<thead class="thead-dark">
						<tr>
							<th><?php echo $Lang['datep'];?></th>
							<th><?php echo $Lang['title'];?></th>						
							<th><?php echo $Lang['result'];?></th>						
						</tr>
					</thead>
					<tbody>
					<?php
						$pdo = Database::connect();
						$sql = "SELECT * FROM view_protocol";
						$sql = $sql." WHERE usersid=".$usersid ;
						$sql = $sql." ORDER BY datep";
						foreach ($pdo->query($sql) as $row) {
							echo '<tr>';
							echo '<td>'.date("d.m.Y H:i", strtotime($row['datep'])).'</td>';
							echo '<td>'. $row['title'] . '</td>';
							echo '<td>'. $row['result'] . '</td>';
							echo '</tr>';						
						}
						Database::disconnect();
					?>			
					</tbody>
				</table>
				<div text-align="center">
				<a class="btn btn-outline-info" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
				<a class="btn btn-outline-info" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
			</div>	
			</div>
		</div>
	</div>
</body>
<?php
}
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
