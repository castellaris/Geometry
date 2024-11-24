<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/visits.php'; ?>
<body>
	<div class="container" style="padding: 5px" >
		<div class="row justify-content-center">
			<a href="/Geometry/lecture/index.php"><h2>Лекции</h2></a>			
		</div>
		<div class="row justify-content-center" style="width: 100%;">
			<a href="/Geometry/lecture/10/02/index.php"><h3>10 класс. Параллельность прямых и плоскостей</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Углы с сонаправленными сторонами. Угол между прямыми</h4>			
		</div>
		<div class="text-right">
			<input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
            <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
			<button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
		</div>
		<div style="margin-top:25px;">
			
		<div class=WordSection1>
<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><a
href="https://interneturok.ru/lesson/geometry/10-klass/parallelnost-pryamyh-i-ploskostej/ugly-s-sonapravlennymi-storonami-ugol-mezhdu-pryamymi?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Определение сонаправленных лучей</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Любая прямая, например&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОО</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;(Рис.
1.), рассекает плоскость на две полуплоскости. Если лучи&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и лежат в одной полуплоскости, то они называются&nbsp;<strong><span
style='font-family:"Helvetica",sans-serif'>сонаправленными</span></strong>.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Лучи&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;не являются
сонаправленными (Рис. 1.). Они параллельны, но не лежат в одной полуплоскости.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=223
height=174 id="Рисунок 11" src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64149/e04d67c0_1252_0131_429b_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 1.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white; width: 100%;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/parallelnost-pryamyh-i-ploskostej/ugly-s-sonapravlennymi-storonami-ugol-mezhdu-pryamymi?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Теорема о равенстве углов с сонаправленными
сторонами</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><strong><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Если стороны двух
углов сонаправленны, то такие углы равны.</span></strong></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Доказательство</span></em></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Пусть нам даны параллельные
лучи&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и
параллельные лучи&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;(Рис.
2.). То есть, мы имеем два угла&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>, чьи
стороны лежат на сонаправленных лучах. Докажем, что эти углы равны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=197
height=216 id="Рисунок 10" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64150/e1a15100_1252_0131_429c_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 2.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>На стороне луча&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;выберем
точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;так,
чтобы отрезки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;были
равны. Аналогично, точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>В</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;выберем
так, чтобы отрезки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1&nbsp;</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>были
равны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим четырехугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>ОА</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;(Рис.
3.). В этом четырехугольники стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и равны. По признаку параллелограмма, четырехугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>ОА</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;является
параллелограммом. Так как&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>ОА</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;–
параллелограмм, то стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОО</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и равны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим
четырехугольник&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>ОВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>. В
этом четырехугольники стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и равны. По признаку параллелограмма, четырехугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>ОВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;является
параллелограммом. Так как&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>ОВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;–
параллелограмм, то стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОО</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ВВ</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и равны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=194
height=209 id="Рисунок 9" src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64151/e26dbb90_1252_0131_429d_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 3.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>И прямая&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельна
прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОО</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>, и
прямая&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ВВ</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельна
прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОО</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>,
значит прямые&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ВВ</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим
четырехугольник&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>АВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>. В
этом четырехугольники стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АА</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ВВ</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и равны. По признаку параллелограмма, четырехугольник&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>АВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;является
параллелограммом. Так как&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>В</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>АВ</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;–
параллелограмм, то стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;параллельны
и равны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим треугольники&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>.&nbsp;</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Стороны&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>ОА</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>равны
по построению. Стороны&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>ОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1&nbsp;</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>также
равны по построению. А как мы доказали, и стороны&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;тоже
равны. Значит, треугольники&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1&nbsp;</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>равны
по трем сторонам. В равных треугольниках против равных сторон лежат равные
углы. Значит, углы&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АОВ</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>О</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В</span></em><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1&nbsp;</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>равны,
что и требовалось доказать.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white ; width: 100%;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/parallelnost-pryamyh-i-ploskostej/ugly-s-sonapravlennymi-storonami-ugol-mezhdu-pryamymi?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Угол между пересекающимися прямыми</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>1. Пересекающиеся прямые.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Если прямые пересекающиеся, то
мы имеем четыре разных угла.&nbsp;<strong><span style='font-family:"Helvetica",sans-serif'>Углом
между двумя прямыми</span></strong>, называется наименьший из углов между двумя
прямыми. Угол между пересекающимися прямыми&nbsp;<em><span style='font-family:
"Helvetica",sans-serif'>а</span></em>&nbsp;и&nbsp;<em><span style='font-family:
"Helvetica",sans-serif'>b</span></em>&nbsp;обозначим &#945; (Рис. 4.). Угол
&#945; такой, что&nbsp;<img width=79 height=37 id="Рисунок 8"
src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64152/e33ba890_1252_0131_429e_12313d0128c8.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=283
height=140 id="Рисунок 7" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64153/e40ec910_1252_0131_429f_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 4. Угол между двумя
пересекающимимся прямыми</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white; width: 100%;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/parallelnost-pryamyh-i-ploskostej/ugly-s-sonapravlennymi-storonami-ugol-mezhdu-pryamymi?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Угол между скрещивающимися прямыми</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>2. Скрещивающиеся прямые</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Пусть прямые&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>а</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em>&nbsp;скрещивающиеся.
Выберем произвольную точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>О</span></em>.
Через точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>О</span></em>&nbsp;проведем
прямую&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>а</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>,
параллельную прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>а</span></em>,
и прямую&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>b</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>,
параллельную прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>b</span></em>&nbsp;(Рис.
5.). Прямые&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>а</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;пересекаются
в точке&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>О</span></em>.
Угол между двумя пересекающимися прямыми&nbsp;<em><span style='font-family:
"Helvetica",sans-serif'>а</span></em></span><em><sub><span style='font-size:
8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;,
угол &#966;, и называется углом между скрещивающимися прямыми.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=375
height=181 id="Рисунок 6" src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64154/e53cdb20_1252_0131_42a0_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 5. Угол между двумя
скрещивающимися прямыми</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Зависит ли величина угла от
выбранной точки О?</span></em><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;Выберем точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>.
Через точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>О</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;проведем
прямую&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>а</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>,
параллельную прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>а</span></em>,
и прямую&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>b</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>,
параллельную прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>b</span></em>&nbsp;(Рис.
6.). Угол между пересекающимися прямыми&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>а</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;обозначим&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>&#966;</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>.
Тогда углы&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>&#966;&nbsp;</span></em>и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>&#966;</span></em></span><em><sub><span
style='font-size:8.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1</span></sub></em><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;-&nbsp;</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>углы
с сонаправленными сторонами. Как мы доказали, такие углы равны между собой.
Значит, величина угла между скрещивающимися прямыми не зависит от выбора
точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>О</span></em>.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=571
height=151 id="Рисунок 5" src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/64155/e61acf80_1252_0131_42a1_12313d0128c8.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 6.</span></p>
</div>
		</div>
		<div text-align="center">
			<a style="align:center" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
			<a>|</a>
			<a style="align:center" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
		</div>				
	</div>	<!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/footer.php'; ?>