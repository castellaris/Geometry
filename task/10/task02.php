<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
	$section = "10 класс";
	$topic = "Углы с сонаправленными сторонами. Угол между прямым";			
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
	<div class="container" style="padding: 5px" >
		<div class="row justify-content-center">
			<a href="/Geometry/task/list.php"><h2>Задачи</h2></a>			
		</div>
		<div class="row justify-content-center">
			<a href=""><h3><?php echo $section;?></h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4><?php echo $topic;?></h4>			
		</div>
		<div style="margin-top:25px;">
			
			<div class=WordSection1>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><a
href="https://interneturok.ru/lesson/geometry/10-klass/parallelnost-pryamyh-i-ploskostej/ugly-s-sonapravlennymi-storonami-ugol-mezhdu-pryamymi?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Задача 1 Найти угол между двумя прямыми</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Прямые&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>&nbsp;параллельны,&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>&nbsp;скрещиваются.
Найдите угол между прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>, если:&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333; width:auto;'>1) </span><span
style='font-size:11.5pt;font-family:"Cambria Math",serif;color:#333333'>&#8736;</span><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>АОВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;=
40°.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Выберем точку&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>С</span></em>. Через нее проходи
прямая&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>СD</span></em>.
Проведем&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>СА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельно&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;(Рис. 7.). Тогда
угол&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>СD</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;–
угол между скрещивающимися прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>. По теореме об углах
с сонаправленными сторонами, угол&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>СD</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;равен
углу&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АОВ</span></em>,
то есть 40°.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=238
height=182 id="Рисунок 4" src="task02.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64156/e6f46130_1252_0131_42a2_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 7. Найти угол между
двумя прямыми</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>2. </span><span
style='font-size:11.5pt;font-family:"Cambria Math",serif;color:#333333'>&#8736;</span><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>АОВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;=
135°.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Сделаем то же самое
построение (Рис. 8.). Тогда угол между скрещивающимися прямыми&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>&nbsp;равен 45°, так
как он наименьший из углов, которые получаются при пересечении прямых&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=209
height=214 id="Рисунок 3" src="task02.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64157/e8427210_1252_0131_42a3_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 8.&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>3. </span><span
style='font-size:11.5pt;font-family:"Cambria Math",serif;color:#333333'>&#8736;</span><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>АОВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;=
90°.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Сделаем то же самое
построение (Рис. 9.). Тогда все углы, которые получаются при пересечении
прямых&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>СD</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;равны
90°. Искомый угол равен 90°.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=202
height=204 id="Рисунок 2" src="task02.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64158/e99a1530_1252_0131_42a4_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 9.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><a
href="https://interneturok.ru/lesson/geometry/10-klass/parallelnost-pryamyh-i-ploskostej/ugly-s-sonapravlennymi-storonami-ugol-mezhdu-pryamymi?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Задача 2</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>1. Докажите, что середины
сторон пространственного четырехугольника являются вершинами параллелограмма.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=191
height=188 id="Рисунок 1" src="task02.files/image004.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64159/eac4d8c0_1252_0131_42a5_12313d0128c8.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 10.&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Доказательство</span></em></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Пусть нам дан
пространственный четырехугольник&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ABCD</span></em>.&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>M,&nbsp;N,&nbsp;K,&nbsp;L</span></em>&nbsp;–
середины ребер&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>BD,&nbsp;AD,&nbsp;AC,&nbsp;BC</span></em>&nbsp;соответственно
(Рис. 10.). Нужно доказать, что&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>MNKL</span></em>&nbsp;–
параллелограмм.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим треугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВD</span></em>.&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;– средняя линия.
По свойству средней линии,&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;параллельна&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и равняется ее
половине.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим треугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВС</span></em>.&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>LК</span></em>&nbsp;– средняя линия.
По свойству средней линии,&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>LК</span></em>&nbsp;параллельна&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и равняется ее
половине.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>И&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>МN</span></em>, и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>LК</span></em>&nbsp;параллельны&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВ</span></em>. Значит,&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;параллельна&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>LК</span></em>&nbsp;по теореме о
трех параллельных прямых.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Получаем, что в
четырехугольнике&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>MNKL</span></em>&nbsp;–
стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>LК</span></em>&nbsp;параллельны и
равны, так как&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>LК</span></em>&nbsp;равны
половине&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>.
Значит, по признаку параллелограмма, четырехугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>MNKL</span></em>&nbsp;–
параллелограмм, что и требовалось доказать.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>2. Найдите угол между
прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>СD</span></em>, если угол&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>МNК</span></em>&nbsp;= 135°.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Как мы уже доказали,&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;параллельна
прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>.&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>NК</span></em>&nbsp;– средняя линия
треугольника&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АСD</span></em>,
по свойству,&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>NК</span></em>&nbsp;параллельна&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>DС</span></em>. Значит, через
точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>N</span></em>&nbsp;проходят
две прямые&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>NК</span></em>, которые параллельны
скрещивающимся прямым&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>DС</span></em>&nbsp;соответственно.
Значит, угол между прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>NК</span></em>&nbsp;является углом
между скрещивающимися прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>DС</span></em>. Нам дан тупой
угол&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МNК</span></em>&nbsp;=
135°. Угол между прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>МN</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>NК</span></em>&nbsp;– наименьший из
углов, полученных при пересечении этих прямых, то есть 45°.</span></p>
		</div>		
		<form name="task" id="task"	method="post">
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
	</div>	
	</div><!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
