<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/navigation.php"; ?>

<body>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	<div class="container">
		<div class="row">
			<h1><?php echo $Lang['newss'];?></h1>
		</div>
		<div class="row">
			<?php
				if (isset($_REQUEST['searchBtn'])) 
					{$searchText = $_REQUEST['searchText'];}
				else
					{$searchText = null;}								
			?>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" name="searchText" value="<?php echo !empty($searchText)?$searchText:null?>" placeholder=<?php echo $Lang['search'];?> aria-label=<?php echo $Lang['search'];?>>					
				<button class="btn btn-outline-info" name="searchBtn" type="submit" style="width:100px"><?php echo $Lang['search'];?></button>
				<button class="btn btn-outline-primary" name="resetBtn" type="submit" onClick="window.location.reload();" style="width:100px"><?php echo $Lang['reset'];?></button>								
			</form>
		</div>
		<br>
		<div class="row">
			<?php
			$pdo = Database::connect();
			$sql = "SELECT * FROM news";
			if (isset($_REQUEST['searchBtn']))
				$sql = $sql." WHERE title LIKE '%".$_REQUEST['searchText']."%' OR details LIKE '%".$_REQUEST['searchText']."%'";
			$sql = $sql.' ORDER BY daten DESC';
			foreach ($pdo->query($sql) as $row) {
				//echo '<div class="col-md-4">';
				echo '<div class="card" style="width:100%">';
				echo '<div class="card-body">';
				
				echo '<div class="row">';
				
				echo '<div class="col-md-9">';
				echo '<h5 class="card-title">'. date("d.m.Y H:i", strtotime($row['daten'])) .'</h5>';
				echo '<h4 class="card-title"><a href="../news/read.php?id='.$row['id'].'">'.$row['title'].'</a></h4>';
				echo '</div>';
				echo '<div class="col-md-3">';											
				if($row['photo']!=null)
					echo '<img alt="photo" width="100%" src="data:'.$row['mime'].';base64,'.base64_encode($row['photo']).'">';
				//echo '<p class="card-text">'. $row['details'].'</p>';
				echo '</div>';
				
				echo '</div>';
				
				echo '</div>';
				echo '</div>';
				//echo '</div>';				
			}
			Database::disconnect();
			?>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/footer.php"; ?>

