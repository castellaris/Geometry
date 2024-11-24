<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/visits.php'; ?>
<body>
	<div class="container" style="padding: 5px" >
		<div class="row justify-content-center">
			<a href="/Geometry/lecture/index.php"><h2>Лекции</h2></a>			
		</div>
		<div class="row justify-content-center">
			<h3>10 класс. Перпендикулярность прямых и плоскостей</h3>			
		</div>
		<div class="row" style="margin: 5px">
			<a href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
		</div>
		<div class="row">
			<ol>
				<li><a href="lecture01.php">Лекция №1. Угол между прямой и плоскостью</a></li>
				<!--
				<li><a href="lecture02.php">Раздел №1. Лекция №2</a></li>
				<li><a href="lecture03.php">Раздел №1. Лекция №3</a></li>
				<li><a href="lecture04.php">Раздел №1. Лекция №4</a></li>
				<li><a href="lecture05.php">Раздел №1. Лекция №5</a></li>	
				-->
			</ol>
		</div>
		<div text-align="center">
			<a style="align:center" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
			<a>|</a>
			<a style="align:center" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
		</div>				
	</div>	<!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/footer.php'; ?>
