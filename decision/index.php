<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php';  ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php';  ?><?php
// Если это не менеджер - то вход запрещен
if ($manager == 0) {
	header("location: /Geometry/login.php");
}
?>
<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['decisions'];?></h3>
		</div>
		<div class="row" style="max-width: 800px; margin: 0 auto; justify-content:center">
			<table id="myTable" class="cell-border hover stripe" style="width:100%">
				<thead>
					<tr>
						<th><?php echo $Lang['dated'];?></th>
						<th><?php echo $Lang['login'];?></th>
						<th><?php echo $Lang['topic'];?></th>
						<th><?php echo $Lang['answer'];?></th>
						<th><?php echo $Lang['rating'];?></th>
						<th><?php echo $Lang['action'];?></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$pdo = Database::connect();
						$sql = "SELECT * FROM view_decision ORDER BY dated";
						foreach ($pdo->query($sql) as $row) {
							echo '<tr>';
							echo '<td>'.date("d.m.Y H:i", strtotime($row['dated'])).'</td>';
							echo nl2br('<td>'. $row['login']. PHP_EOL . $row['name'].'</td>');							
							echo nl2br('<td>'. $row['section']. PHP_EOL . $row['topic'].'</td>');							
							echo '<td>'. $row['solution'].'</td>';		
							echo '<td>'. $row['rating'].'</td>';		
							echo '<td>';
							echo '<a class="btn btn-outline-primary" style="width:100%" href="update.php?id='.$row['id'].'">'.$Lang['update'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-info" style="width:100%" href="read.php?id='.$row['id'].'">'.$Lang['read'].'</a>';
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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php';  ?>