<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; 
?>
<body class="body">
	<div class="wrapper">
		<div class="container">
			<div class="row justify-content-md-center" style="padding:10px;">
				<h2><?php echo $Lang['logo']; ?></h2>
			</div>
			<div class="row" style="padding:10px;padding-top:10px;">
				<div class="col-md-4">
					<img class="card-img-top" src="/Geometry/images/geometry.png" style="width:80%" alt="geometry">
				</div>
				<div class="col-md-8">
    <div class="content">
        <h3>Назначение сайта</h3>
        <p style="width: 80%; margin: 0 auto; text-align: center;">Этот сайт предназначен для изучения геометрии. 
    На сайте можно ознакомиться с <a href="/Geometry/manual/list.php" target="_blank">материалами по геометрии</a>, 
    Зарегистрированные пользователи имеют возможность попробовать самостоятельно прорешать <a href="/Geometry/task/list.php">задачи</a>
    или выполнить <a href="/Geometry/test/select.php">тестовые задания</a>
</p>
    </div>
</div>
		</div>	<!-- /container -->
	</div>	
	</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
