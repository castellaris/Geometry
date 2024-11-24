<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/navigation.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/visits.php"; ?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
	<div class="container" style="padding: 5px;">
		<div class="row justify-content-md-center" style="padding:20px;">
			<h1 class="display-4" text-align="center"><?php echo $Lang['tasks'];?></h1>
		</div>
		<div class="row justify-content-md-center" >
			<div id="accordion" style="width:100%;padding:10px;">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
						<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						10 класс
						</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body" >							
							<ol>
								<li><a href="/Geometry/task/10/task01.php">Предмет стереометрии. Аксиомы стереометрии</a></li>
								<li><a href="/Geometry/task/10/task02.php">Углы с сонаправленными сторонами. Угол между прямым</a></li>
								<li><a href="/Geometry/task/10/task03.php">Угол между прямой и плоскостью</a></li>
								<li><a href="/Geometry/task/10/task04.php">Компланарные векторы</a></li>
								<li><a href="/Geometry/task/10/task05.php">Окружность</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="card" >
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							11 класс
						</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<ol>
								<li><a href="/Geometry/task/11/task01.php">Прямоугольная система координат в пространстве. Координаты вектора</a></li>
								<li><a href="/Geometry/task/11/task02.php">Понятие конуса</a></li>
								<li><a href="/Geometry/task/11/task03.php">Объем пирамиды и конуса</a></li>
								<li><a href="/Geometry/task/11/task04.php">Сложные геометрические тела</a></li>
								<li><a href="/Geometry/task/11/task05.php">Построение сечений</a></li>
							</ol>							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/footer.php"; ?>
