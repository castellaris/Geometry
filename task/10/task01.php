<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
	$section = "10 класс";
	$topic = "Предмет стереометрии. Аксиомы стереометри";			
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
	<div class="container" style="padding: 5px;" >
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
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width:auto;'><strong><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Решение задач</span></strong></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Дан тетраэдр&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>АВСD</span></em>&nbsp;(Рис. 6). Даны
следующие точки: точка&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>Е</span></em>&nbsp;– внутренняя
точка ребра&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>,
точка&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>Р</span></em>&nbsp;–
внутренняя точка отрезка&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>ЕD</span></em>, точки&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>М</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>К</span></em>,
соответственно, на ребрах&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>ВD</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DС</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=189 height=220 id="Рисунок 56"
src="task01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33021/0f860bd762f305e100d865144bd28194.png"></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рис. 6.&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><strong style='box-sizing: inherit'><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Задача 1</span></strong></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>а. В какой плоскости лежит прямая&nbsp;<img width=27 height=22
id="Рисунок 55" src="task01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33022/1b3f71813f38b2740e9b872f160722d5.png"></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ:&nbsp;<img width=72 height=22 id="Рисунок 54"
src="task01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33023/cfe2b91972c78164ac5eb04000c506f7.png">.
Прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>РЕ</span></em>&nbsp;лежит
в плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВD</span></em>,
так как в этой плоскости лежат две точки этой прямой. Точка&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>Е</span></em>&nbsp;лежит
в плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВD</span></em>&nbsp;и
точка&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>Р</span></em>&nbsp;лежит
в этой же плоскости. Значит, по второй аксиоме все точки прямой&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>РЕ</span></em>&nbsp;лежат
в плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВD</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;б. В какой плоскости лежит прямая&nbsp;<img width=32
height=22 id="Рисунок 53" src="task01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33024/0500e816d7c8c33ae110452459e006da.png"></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ:&nbsp;<img width=76 height=22 id="Рисунок 52"
src="task01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33025/148ace545f641f27fd4efbda6c49ec21.png">.
Прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>MK</span></em>&nbsp;лежит
в плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DBC</span></em>,
так как в этой плоскости лежат две точки этой прямой. Точка&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>M</span></em>&nbsp;лежит
в плоскости DBC и точка&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>K</span></em>&nbsp;лежит в плоскости&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DBC</span></em>.
По второй аксиоме все точки прямой&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>MK</span></em>&nbsp;лежат в
плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DBC</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;в. В каких плоскостях лежит прямая&nbsp;<img width=29
height=22 id="Рисунок 51" src="task01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33026/a671fcd5097209972b1b2c857e674283.png"></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ: Прямая&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>BD</span></em>&nbsp;лежит в плоскости<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>BDА</span></em>&nbsp;и
в плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>BDС</span></em>.
Значит, прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>BD</span></em>&nbsp;одновременно лежит в двух
плоскостях. Прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>BD</span></em>&nbsp;есть линия пересечения двух
плоскостей. Говорят, что грани&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>АBD,&nbsp;BDС</span></em>&nbsp;пересекаются
по прямой&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>BD</span></em>.
Это можно записать так:</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=199 height=41 id="Рисунок 50"
src="task01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/contentable_static_image/164576/5a55f950_4c7e_0132_41b1_015c2d23c359.png"></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>г. В каких гранях лежит прямая&nbsp;<img width=21 height=22
id="Рисунок 49" src="task01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33028/352593e0524e83c3818bdb6191fcdf6a.png">?</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ: Прямая&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>АB</span></em>&nbsp;лежит в грани&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВС</span></em>&nbsp;и
в грани&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АBD</span></em>.
Значит, прямая АВ есть линия пересечения двух этих граней.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=216 height=39 id="Рисунок 48"
src="task01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33029/0032267aca0b96c23cb28f9efc38c2a1.png"></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>д. В каких гранях лежит прямая&nbsp;<img width=20 height=22
id="Рисунок 47" src="task01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33030/cbe810934b112873f99e6a949af212d8.png">?</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ: Прямая EC лежит в плоскости АВС и в плоскости ECD, так
как точки Е и С лежат одновременно в плоскости АВС и в плоскости ECD. Значит,
прямая ЕС есть линия пересечения этих плоскостей.&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=215 height=39 id="Рисунок 46"
src="task01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33031/62bb340f42abcdfdcf935e331a0c2e93.png"></span><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><strong style='box-sizing: inherit'><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Задача 2.</span></strong></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>а. Найдите точку пересечения прямой&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>DК</span></em>&nbsp;с плоскостью&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВС</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Решение:</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Прямая&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>DК</span></em>&nbsp;содержит точку&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>С</span></em>.
Плоскость&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВС</span></em>&nbsp;содержит
точку&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>С</span></em>.
Значит, прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>DК</span></em>&nbsp;и плоскость&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВС</span></em>&nbsp;пересекаются
в точке&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>С</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>б. Найдите точку пересечения прямой&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>СЕ</span></em>&nbsp;с плоскостью&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Решение:&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Точка&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>Е</span></em>&nbsp;принадлежит и
прямой&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>СЕ</span></em>,
и плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>.
Значит, Прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>СЕ</span></em>&nbsp;пересекается с плоскостью&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>&nbsp;в
точке&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>Е</span></em>.&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><strong style='box-sizing: inherit'><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Задача 3.</span></strong></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>а. Найдите точки, лежащие одновременно в плоскостях&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DВС</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Решение:</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Точка В и точка D одновременно лежат и в&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>,
и в&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DВС</span></em>.
Значит,&nbsp;<img width=124 height=22 id="Рисунок 45"
src="task01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33032/81cafaa5d3edfc511c586a3f0fd64f2c.png">.
Все точки прямой&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>DВ</span></em>&nbsp;являются ответом.&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>б. Найдите прямые, по которым пересекаются плоскость&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DВС</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Решение:</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Точка&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>В</span></em>&nbsp;и точка&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>D</span></em>&nbsp;одновременно
лежат и в&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>,
и в&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>DВС</span></em>.
Значит, прямая&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>DВ</span></em>&nbsp;есть прямая, по которой пересекаются
заданные плоскости.<strong style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>&nbsp;</span></strong></span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>в. Назовите прямые, по которым пересекаются плоскости&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>СDА</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Решение:</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Точки&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>А</span></em>,&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>D</span></em>&nbsp;лежат
в плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АDВ</span></em>,
а также точки&nbsp;<em style='box-sizing: inherit'><span style='font-family:
"Helvetica",sans-serif'>А</span></em>,&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>D</span></em>&nbsp;лежат в другой
плоскости&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>СDА</span></em>.
Значит,&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АD</span></em>&nbsp;–
линия их пересечения:&nbsp;<img width=124 height=22 id="Рисунок 44"
src="task01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33033/0c5b4e2eaab4c7c4c959dae5e3ea70b2.png">.&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>г. Назовите прямые, по которым пересекаются плоскости&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>РDС</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВС</span></em>.</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Решение:&nbsp;</span></p>
<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px ; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Плоскость&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>РDС</span></em>&nbsp;совпадает с
плоскостью&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>ЕDС</span></em>.
Точка&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>Е</span></em>&nbsp;и
точка&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>С</span></em>&nbsp;одновременно
лежат в двух плоскостях:&nbsp;<em style='box-sizing: inherit'><span
style='font-family:"Helvetica",sans-serif'>РDС</span></em>&nbsp;и&nbsp;<em
style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>АВС</span></em>.
Значит,&nbsp;<em style='box-sizing: inherit'><span style='font-family:"Helvetica",sans-serif'>СЕ</span></em>&nbsp;–
это линия пересечения двух плоскостей.&nbsp;<img width=121 height=22
id="Рисунок 43" src="task01.files/image014.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33034/789de7dd4364bbe44663817875701ffb.png">&nbsp;</span></p>
</div></div>
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
	</div>	<!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
