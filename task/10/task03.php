<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
	$section = "10 класс";
	$topic = "Угол между прямой и плоскостью";			
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
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert" style="width:auto">'.$message.'</div>';}?>
	<div class="container" style="padding: 5px; display:inline-block; justify-content:center;" >
		<div class="row justify-content-center" style="width: auto;">
			<a href="/Geometry/task/list.php"><h2>Задачи</h2></a>			
		</div>
		<div class="row justify-content-center" style="margin:auto ;">
			<a href=""><h3><?php echo $section;?></h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px; width:100%;">
			<h4><?php echo $topic;?></h4>			
		</div>
		<div class="task-condition" style="margin-top: 25px; width: 100%;">
    <p class="MsoNormal task-description" style="overflow: hidden;">1. Длина отрезка <img width=21 height=auto id="Рисунок 14" src="task03.files/image001.png" alt=""> равна <img width=19 height=22 id="Рисунок 13" src="task03.files/image002.png" alt="">. Он пересекает плоскость в точке <img width=11 height=22 id="Рисунок 12" src="task03.files/image003.png" alt="">. Расстояния от концов отрезка до плоскости соответственно равны <img width=19 height=22 id="Рисунок 11" src="task03.files/image004.png" alt=""> и <img width=9 height=22 id="Рисунок 10" src="task03.files/image005.png" alt="">. Найдите острый угол, который образует отрезок <img width=21 height=22 id="Рисунок 9" src="task03.files/image001.png" alt=""> с плоскостью.</p>
    <p class="MsoNormal task-description" style="overflow: hidden;">2. Прямая проведенная из точки <img width=10 height=22 id="Рисунок 7" src="task03.files/image007.png"> к данной плоскости, равна <img width=10 height=22 id="Рисунок 6" src="task03.files/image008.png" alt="">. Чему равна проекция этой прямой на плоскость, если угол между прямой <img width=24 height=22 id="Рисунок 5" src="task03.files/image006.png" alt=""> и данной плоскостью равен <img width=24 height=22 id="Рисунок 4" src="task03.files/image009.png" alt="">?</p>
    <p class="MsoNormal task-description" style="overflow: hidden;">3. Под углом <img width=11 height=22 id="Рисунок 3" src="task03.files/image010.png" alt=""> к плоскости <img width=10 height=22 id="Рисунок 2" src="task03.files/image011.png" alt=""> проведена прямая. Найдите <img width=11 height=22 id="Рисунок 1" src="task03.files/image010.png" alt="">, если известно, что проекция прямой вдвое меньше самой прямой.</p>
</div>
	
		 <form name="task" id="task"	method="post" style="width: 100;">
			 <div text-align="center">
				 <h4>Решение</h4>	
				 <textarea name="td1" id="td1" cols="80" rows="10"><?php if (!empty($td1)) echo htmlspecialchars($td1);?></textarea>
			 </div>	
			 <div text-align="center">
				 <button type="submit" class="btn" style="width:100px">Принять</button>
				 <a class="btn" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
				 <a class="btn" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
			 </div>				
		 </form>
	 </div>	<!-- /container -->
 </body>
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
