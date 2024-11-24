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
			<h3 text-align="center"><?php echo $Lang['questions'];?></h3>
		</div>
		<div class="row" style="max-width: 800px; margin: 0 auto; justify-content:center">
			<table id="myTable" class="cell-border hover stripe" style="width:100%">
				<thead>
					<tr>
						<th><?php echo $Lang['title'];?></th>
						<th><?php echo $Lang['question'];?></th>
						<th><a href="create.php" class="btn btn-outline-info" style="width:auto"><?php echo $Lang['create'];?></a></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$pdo = Database::connect();
						$sql = "SELECT * FROM view_question ORDER BY title";
						foreach ($pdo->query($sql) as $row) {
							echo '<tr>';
							echo '<td>'. $row['title'] . '</td>';
							echo '<td>'. $row['question'] . '</td>';
							echo '<td>';
							echo '<a class="btn btn-outline-info" style="width:100%" href="read.php?id='.$row['id'].'">'.$Lang['read'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-primary" style="width:100%" href="update.php?id='.$row['id'].'">'.$Lang['update'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-danger" style="width:100%" onclick="return confirm(\''.$Lang['confirm_delete'].': '.$row['title'].'?'.'\')" href="delete.php?id='.$row['id'].'">'.$Lang['delete'].'</a>';
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
