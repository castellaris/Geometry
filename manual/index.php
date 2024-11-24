<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php
if ($manager == 0) {
	header("location: /Geometry/login.php");
}
?>
<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['manuals'];?></h3>
		</div>
		<div class="row" style="max-width: 800px; margin: 0 auto; justify-content:center">
			<table id="myTable" class="cell-border hover stripe">
				<thead>
					<tr>
						<th><?php echo $Lang['title'];?></th>
						<th><?php echo $Lang['datem'];?></th>
						<th><?php echo $Lang['user_login'];?></th>
						<th><?php echo $Lang['uploadname'];?></th>
						<th><a href="create.php" class="btn btn-outline-success"><?php echo $Lang['create'];?></a></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$pdo = Database::connect();
						$sql = "SELECT manual_title, datem, login, name, uploadpath, uploadname, details, id FROM view_manual ORDER BY manual_title";
						foreach ($pdo->query($sql) as $row) {
							echo '<tr>';
							echo '<td title="'.$row['details'].'">'. $row['manual_title'] .' '. '</td>';
							echo '<td>'.date("d.m.Y", strtotime($row['datem'])).'</td>';
							echo nl2br('<td>'. $row['login'] . PHP_EOL . $row['name']. '</td>');
							echo '<td> <a href="'. $row['uploadpath'] .'">'. $row['uploadname'] .'</a></td>';
							echo '<td>';
							echo '<a class="btn btn-outline-info" style="width:100%" href="read.php?id='.$row['id'].'">'.$Lang['read'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-primary" style="width:100%" href="update.php?id='.$row['id'].'">'.$Lang['update'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-danger" style="width:100%" onclick="return confirm(\''.$Lang['confirm_delete'].': '.$row['manual_title'].'?'.'\')" href="delete.php?id='.$row['id'].'">'.$Lang['delete'].'</a>';
							echo '</td>';
							echo '</tr>';							
						}
						Database::disconnect();
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
