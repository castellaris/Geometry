<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
	$section = "11 класс";
	$topic = "Объем пирамиды и конуса";			
	if ( !empty($_POST)) {		
		// Отслеживание ошибок проверки
		$message = null;
		// Сохранять значения отслеживаемых полей
		$dated =  date("Y-m-d H:i:s");		
		$usersid = $_SESSION['usersid'];		
		$td1 = nl2br($_POST['td1']);
		$solution = $td1;
		// Проверка ввода
		$valid = true;
		if (empty($td1)) {
			$message =	$message.$Lang['enter'].' '.$Lang['solution'].'<br>';
			$valid = false;
		}		
		// Вставка данных
		if ($valid) {
			try {
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO decision (dated, usersid, section, topic, solution) values(?, ?, ?, ?, ?)";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($dated, $usersid, $section, $topic, $solution));
				Database::disconnect();
				echo '<script language="javascript">';
				echo 'if(!alert("'.$Lang['your_answer_is_accepted'].'")) window.location.href="/Geometry/task/list.php"';
				echo '</script>';
			}
			catch (Exception $e) {
				$message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
			}
		}
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
	<div class="container" style="padding: 5px; max-width: 70%; overflow:auto;">
		<div class="row justify-content-center">
			<a href="/Geometry/task/list.php"><h2>Задачи</h2></a>			
		</div>
		<div class="row justify-content-center">
			<a href=""><h3><?php echo $section;?></h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4><?php echo $topic;?></h4>			
		</div>
		<div class="task-condition" style="margin-top: 25px; width: 100%;">
    <div class="WordSection1 full-width">
        <p class="MsoNormal task-description">1. Вычислите объем правильной усеченной треугольной пирамиды, если стороны ее оснований равны <img width=9 height=22 src="task03.files/image001.png" alt=""> см и <img width=19 height=22 src="task03.files/image002.png" alt=""> см, а перпендикуляр, который соединяет основания, равен <img width=27 height=24 src="task03.files/image003.png" alt=""> см.</p>
        <p class="MsoNormal task-description">2. В правильной треугольной пирамиде <img width=39 height=22 src="task03.files/image004.png" alt=""> медианы основания <img width=31 height=22 src="task03.files/image005.png" alt=""> пересекаются в точке <img width=11 height=22 src="task03.files/image006.png" alt="">. <br>Площадь треугольника <img width=31 height=22 src="task03.files/image005.png" alt=""> равна 9;</br> Объем пирамиды равен 6. <br>Найдите длину отрезка <img width=20 height=22 src="task03.files/image007.png" alt="">.</br></p>
        <p class="MsoNormal task-description">3. Объем конуса равен 16. <br>Через середину высоты параллельно основанию конуса проведено сечение, которое является основанием меньшего конуса с той же вершиной.</br> <br>Найдите объем меньшего конуса.</br></p>
    </div>
</div>

		<form name="task" id="task"	method="post">
			<div style="margin-top: 25px; width: 100%; text-align: center;">
				<h4>Решение</h4>	
				<textarea name="td1" id="td1" cols="80" rows="10"><?php if (!empty($td1)) echo htmlspecialchars($td1);?></textarea>
			</div>	
			<div style="text-align:center; margin-top: 20px;">
				<button type="submit" class="btn" style="width:100px; margin:0 5px;">Принять</button>
				<button class="btn" style="width:100px; margin:0 5px;" onclick="javascript:history.back();"><?php echo $Lang['back'];?></button>    
				<button class="btn" style="width:100px; margin:0 5px;" onclick="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></button>    
			</div>
		</form>
	</div>	<!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
