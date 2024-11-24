<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php
// Если это не менеджер - то вход запрещен
if ($manager == 0) {
	header("location: /Geometry/login.php");
}
?>
<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['newss'];?></h3>
		</div>
		<div class="row">
			<table id="myTable" class="cell-border hover stripe" style="width:100%;">
				<thead>
					<tr>
						<th><?php echo $Lang['daten'];?></th>
						<th><?php echo $Lang['news_title'];?></th>
						<th><?php echo $Lang['photo'];?></th>
						<th><a href="create.php" class="btn btn-outline-success" style="width:100px"><?php echo $Lang['create'];?></a></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$pdo = Database::connect();
						$sql = "SELECT * FROM news";
						$sql = $sql." ORDER BY daten DESC";
						foreach ($pdo->query($sql) as $row) {
							echo '<tr>';
							echo '<td>'.date("d.m.Y H:i", strtotime($row['daten'])).'</td>';
							echo '<td>'. $row['title'] . '</td>';
							echo '<td style="text-align:center">';
							if($row['photo']!=null)	echo '<img height="100" src="data:'.$row['mime'].';base64,'.base64_encode($row['photo']).'"><br>';
							echo '</td>';
							echo '<td>';
							echo '<a class="btn btn-outline-info" style="width:100px" href="read.php?id='.$row['id'].'">'.$Lang['read'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-primary" style="width:100px" href="update.php?id='.$row['id'].'">'.$Lang['update'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-danger" style="width:100px" onclick="return confirm(\''.$Lang['confirm_delete'].': '.$row['title'].'?'.'\')" href="delete.php?id='.$row['id'].'">'.$Lang['delete'].'</a>';
							echo '</td>';
							echo '</tr>';
						}
						Database::disconnect();
					?>
				</tbody>
			</table>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
