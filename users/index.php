<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php
// Если это не администратор - то вход запрещен
if ($admin == 0) {
	header("location: /Geometry/login.php");
}
?>
<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	<div class="container">
		<div class="row">
			<h3 text-align="center"><?php echo $Lang['users'];?></h3>			
		</div>
		<div class="row">
			<table id="myTable" class="cell-border compact stripe" style="width:100%">
				<thead>
					<tr>
						<th><?php echo $Lang['user_login'];?></th>
						<th><?php echo $Lang['password'];?></th> <!-- Добавлено отображение пароля -->
						<th><?php echo $Lang['admin'];?></th>
						<th><?php echo $Lang['manager'];?></th>
						<th><?php echo $Lang['name'];?></th>
						<th><?php echo $Lang['email'];?></th>
						<th><?php echo $Lang['phone'];?></th>
						<th><a href="create.php" class="btn btn-outline-success" style="width:150px"><?php echo $Lang['create'];?></a></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$pdo = Database::connect();
						$sql = "SELECT * FROM users ORDER BY login";
						foreach ($pdo->query($sql) as $row) {
							echo '<tr>';
							echo '<td>'.$row['login']. '</td>';
							echo '<td>'.$row['password']. '</td>'; 
							echo '<td>';
							echo ($row['admin']==1)?'Да':'Нет';
							echo '</td>';
							echo '<td>';
							echo ($row['manager']==1)?'Да':'Нет';
							echo '</td>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['email']. '</td>';
							echo '<td>'.$row['phone']. '</td>';
							echo '<td style="width:100px">';							
							echo '<a class="btn btn-outline-info" style="width:100px" href="read.php?id='.$row['id'].'">'.$Lang['read'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-primary" style="width:100px" href="update.php?id='.$row['id'].'">'.$Lang['update'].'</a>';
							echo ' ';
							echo '<a class="btn btn-outline-danger" style="width:100px" onclick="return confirm(\''.$Lang['confirm_delete'].': '.$row['login'].'?'.'\')" href="delete.php?id='.$row['id'].'">'.$Lang['delete'].'</a>';
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
