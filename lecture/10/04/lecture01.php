<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/visits.php'; ?>
<body>
	<div class="container" style="padding: 5px; justify-content:center;" >
		<div class="row justify-content-center">
			<a href="/Geometry/lecture/index.php"><h2>Лекции</h2></a>			
		</div>
		<div class="row justify-content-center" style="width: 100%;">
			<a href="/Geometry/lecture/10/04/index.php"><h3>10 класс. Векторы в пространстве</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Компланарные векторы</h4>			
		</div>
		<div class="text-right">
			<input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
            <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
			<button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
		</div>
		<div style="margin-top:25px;">
			
		<div class=WordSection1>

		<div style="width: 600px; margin: 0 auto; justify-content:center;">
<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:19.5pt;background:white; width: 100%;'><span style='font-size:
16.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Компланарные векторы</span></p></div>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white; width: 100%;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='color:#346BA2;text-decoration:
none'>Введение, понятие компланарности векторов</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Векторы называются компланарными, если при откладывании их от
одной и той же точки они будут лежать в одной плоскости.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим векторы&nbsp;<img width=7 height=22
id="Рисунок 64" src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147836/ebb282c0_e517_0131_f310_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=9 height=25 id="Рисунок 63" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147837/ed1cddf0_e517_0131_f311_12313c0dade2.png">:
рис. 1</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=103 height=96 id="Рисунок 62"
src="lecture01.files/image003.jpg" alt="Векторы "></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
1. Векторы&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=7 height=22 id="Рисунок 61"
src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147836/ebb282c0_e517_0131_f310_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;и&nbsp;</span></span><span style='font-size:10.0pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=9
height=25 id="Рисунок 60" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147837/ed1cddf0_e517_0131_f311_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333; width: 100%;'>Мы знаем, что если заданы два неколлинеарных вектора на
плоскости, то любой третий вектор на той же плоскости можно однозначно
разложить по этим векторам: рис. 2, 3.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=160 height=147 id="Рисунок 59"
src="lecture01.files/image004.jpg" alt="Векторы на плоскости"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='box-sizing: inherit; width: 100%;'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
2. Векторы на плоскости</span></span></span></p>

<h2 style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width: 100%;'><span
style='font-family:"Helvetica",sans-serif;color:#333333; width: 100%;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=83 data-ember-action=""
data-ember-action-1073=1073 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Теорема о разложении вектора по двум
неколлинеарным</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=79 height=25 id="Рисунок 58"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147840/f0fd9a40_e517_0131_f314_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=175 height=169 id="Рисунок 57"
src="lecture01.files/image006.jpg"
alt="Разложение вектора через два неколлинеарных"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
3. Разложение вектора через два неколлинеарных</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Данный факт легко доказывается. Пусть&nbsp;<img 
width=47 height=24 id="Рисунок 56" src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147842/f3b740d0_e517_0131_f316_12313c0dade2.png">.
Из точки С проводим прямую CB, параллельно вектору&nbsp;<img  width=7
height=22 id="Рисунок 55" src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147836/ebb282c0_e517_0131_f310_12313c0dade2.png">.
Получаем вектор&nbsp;<img  width=20 height=24 id="Рисунок 54"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147843/f4fbaec0_e517_0131_f317_12313c0dade2.png">,
коллинеарный вектору&nbsp;<img  width=9 height=25 id="Рисунок 53"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147837/ed1cddf0_e517_0131_f311_12313c0dade2.png">.
Аналогично из точки С проводим прямую CА, параллельно вектору&nbsp;<img
 width=9 height=25 id="Рисунок 52" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147837/ed1cddf0_e517_0131_f311_12313c0dade2.png">.
Получаем вектор&nbsp;<img  width=20 height=24 id="Рисунок 51"
src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147844/f6490a80_e517_0131_f318_12313c0dade2.png">,
коллинеарный вектору&nbsp;<img width=7 height=22 id="Рисунок 50"
src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147836/ebb282c0_e517_0131_f310_12313c0dade2.png">.
Это означает, что существуют такие два числа х и у, причем единственные, что:</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><imgwidth=125 height=25 id="Рисунок 49"
src="lecture01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147845/f798a910_e517_0131_f319_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Напомним, что коллинеарными называются векторы, принадлежащие
одной и той же или параллельным прямым.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width: 100%;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=266 data-ember-action=""
data-ember-action-1075=1075 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Теорема о компланарных векторах,
сложение векторов в пространстве</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Если вектор&nbsp;<img width=7 height=22 id="Рисунок 48"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">&nbsp;можно
представить в виде&nbsp;<img  width=79 height=25 id="Рисунок 47"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147840/f0fd9a40_e517_0131_f314_12313c0dade2.png">,
где х и у – конкретные числа, то вектора&nbsp;<img  width=22 height=25
id="Рисунок 46" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147847/fa3488d0_e517_0131_f31b_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=7 height=22 id="Рисунок 45" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">&nbsp;компланарны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=309 height=261 id="Рисунок 44"
src="lecture01.files/image014.jpg" alt="Сложение векторов в пространстве"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
4. Сложение векторов в пространстве</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим три вектора&nbsp;<img b width=22 height=25
id="Рисунок 43" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147847/fa3488d0_e517_0131_f31b_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=7 height=22 id="Рисунок 42" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">&nbsp;в
пространстве. На плоскости мы строили параллелограмм на двух заданных векторах.
В пространстве же мы можем построить параллелепипед на трех заданных векторах.
Найдем сумму этих векторов (рис. 4).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Из точки К откладываем заданные векторы. Достраиваем
параллелепипед. Суммой трех заданных векторов будет диагональ
параллелепипеда:&nbsp;<img  width=104 height=25 id="Рисунок 41"
src="lecture01.files/image015.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147849/fd03cd80_e517_0131_f31d_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Данный факт легко доказать с помощью правила многоугольника.
Согласно свойствам параллелепипеда, имеем пары равных векторов:&nbsp;<img
 width=54 height=25 id="Рисунок 40" src="lecture01.files/image016.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147850/fe44ed20_e517_0131_f31e_12313c0dade2.png">,&nbsp;<img
 width=49 height=24 id="Рисунок 39" src="lecture01.files/image017.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147851/ff8ba0b0_e517_0131_f31f_12313c0dade2.png">.
Так, получаем:&nbsp;<img  width=231 height=25 id="Рисунок 38"
src="lecture01.files/image018.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147852/00cdefc0_e518_0131_f320_12313c0dade2.png">,
ч.т.д.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333;'>Если заданы три некомпланарных вектора, то мы можем разложить
любой заданный четвертый вектор через три заданных. Например, заданы
некомпланарные векторы&nbsp;<img  width=22 height=25 id="Рисунок 37"
src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147847/fa3488d0_e517_0131_f31b_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=7 height=22 id="Рисунок 36" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">.
Тогда любой вектор&nbsp;<img  width=9 height=25 id="Рисунок 35"
src="lecture01.files/image019.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147853/021e3330_e518_0131_f321_12313c0dade2.png">&nbsp;можно
представить в виде суммы:&nbsp;<img  width=115 height=25 id="Рисунок 34"
src="lecture01.files/image020.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147854/03829110_e518_0131_f322_12313c0dade2.png"></span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width: 100%;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=477 data-ember-action=""
data-ember-action-1077=1077 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Теорема о разложении вектора по трем
некомпланарным векторам</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333; width: 100%;'>Любой вектор в пространстве можно разложить по трем заданным
некомпланарным векторам, причем коэффициенты разложения определяются
единственным образом.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Доказательство.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=136 height=197 id="Рисунок 33"
src="lecture01.files/image021.jpg"
alt="Разложение вектора по трем некомпланарным"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
5. Разложение вектора по трем некомпланарным</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Дано: некомпланарные векторы&nbsp;<img width=22
height=25 id="Рисунок 32" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147847/fa3488d0_e517_0131_f31b_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=7 height=22 id="Рисунок 31" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">,
произвольный вектор&nbsp;<img  width=49 height=24 id="Рисунок 30"
src="lecture01.files/image022.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147856/06433c90_e518_0131_f324_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Построим все заданные векторы из одной точки – точки О (рис. 5).
Рассмотрим плоскость, образованную векторами&nbsp;<img width=7
height=22 id="Рисунок 29" src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147836/ebb282c0_e517_0131_f310_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=9 height=25 id="Рисунок 28" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147837/ed1cddf0_e517_0131_f311_12313c0dade2.png">.
Из точки Р проведем прямую&nbsp;<img  width=25 height=22 id="Рисунок 27"
src="lecture01.files/image023.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147857/07baf250_e518_0131_f325_12313c0dade2.png">,
параллельно направлению&nbsp;<img width=7 height=22 id="Рисунок 26"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">.&nbsp;<img width=16 height=22 id="Рисунок 25" src="lecture01.files/image024.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147858/09283de0_e518_0131_f326_12313c0dade2.png">&nbsp;–
точка пересечения плоскости и прямой. Векторы&nbsp;<img width=25
height=24 id="Рисунок 24" src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147859/0a6e9540_e518_0131_f327_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=7 height=22 id="Рисунок 23" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147846/f8db1210_e517_0131_f31a_12313c0dade2.png">&nbsp;по
построению коллинеарны, значит имеем:&nbsp;<img width=60 height=24
id="Рисунок 22" src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147860/0bbec880_e518_0131_f328_12313c0dade2.png">.
Теперь, согласно правилу треугольника, имеем:&nbsp;<img  width=100
height=24 id="Рисунок 21" src="lecture01.files/image027.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147861/0d20e210_e518_0131_f329_12313c0dade2.png">.
Вектор&nbsp;<img width=25 height=24 id="Рисунок 20"
src="lecture01.files/image028.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147862/0e7efa70_e518_0131_f32a_12313c0dade2.png">&nbsp;мы
нашли. Вектор&nbsp;<img width=26 height=24 id="Рисунок 19"
src="lecture01.files/image029.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147863/0fccc6d0_e518_0131_f32b_12313c0dade2.png">&nbsp;,
согласно построению, лежит в плоскости векторов&nbsp;<img width=7
height=22 id="Рисунок 18" src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147836/ebb282c0_e517_0131_f310_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=9 height=25 id="Рисунок 17" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147837/ed1cddf0_e517_0131_f311_12313c0dade2.png">,
значит, согласно теореме, рассмотренной выше, о разложении вектора через два
неколлинеарных имеем:&nbsp;<img  width=99 height=25 id="Рисунок 16"
src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147864/1115dba0_e518_0131_f32c_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333; width: 100%;'>Так, получено разложение произвольного вектора в пространстве
через три&nbsp; некомпланарных вектора:&nbsp;<img  width=115 height=25
id="Рисунок 15" src="lecture01.files/image031.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147865/1276b810_e518_0131_f32d_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Докажем, что такое разложение единственно. Используем метод от
противного. Предположим, что есть еще тройка чисел (<img  width=56
height=22 id="Рисунок 14" src="lecture01.files/image032.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147866/13cccf60_e518_0131_f32e_12313c0dade2.png">),
с помощью которой можно заданный вектор разложить по трем некомпланарным.&nbsp;<img
 width=135 height=25 id="Рисунок 13" src="lecture01.files/image033.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147867/1524f380_e518_0131_f32f_12313c0dade2.png">.
Имеем систему:</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=143 height=49 id="Рисунок 12"
src="lecture01.files/image034.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147868/16c5bf10_e518_0131_f330_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Вычтем из первого уравнения второе:</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=283 height=25 id="Рисунок 11"
src="lecture01.files/image035.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147869/18632f60_e518_0131_f331_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=254 height=25 id="Рисунок 10"
src="lecture01.files/image036.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147870/19aef250_e518_0131_f332_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Получить нулевой вектор из трех некомпланарных ненулевых
векторов путем их сложения можно только в случае, когда:&nbsp;<img
width=42 height=22 id="Рисунок 9" src="lecture01.files/image037.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147871/1b012cf0_e518_0131_f333_12313c0dade2.png">,&nbsp;<img
 width=44 height=22 id="Рисунок 8" src="lecture01.files/image038.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147872/1c606280_e518_0131_f334_12313c0dade2.png">,&nbsp;<img
 width=42 height=22 id="Рисунок 7" src="lecture01.files/image039.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/147873/1dac6140_e518_0131_f335_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Так, доказано, что возможно единственное разложение вектора по
трем некомпланарным.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width: 100%;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Итак, мы рассмотрели понятие компланарности векторов, доказали
теоремы о разложении векторов на плоскости и в пространстве, рассмотрели сумму
векторов в пространстве.</span></p>

<div>
    <p><strong style='box-sizing: inherit'><span style='font-size:
    11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Список литературы</span></strong></p>

    <div style="width: 600px; margin: 0 auto;">
        <p class=MsoNormal><span
        style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1.<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>И. М. Смирнова, В. А.
        Смирнов. Геометрия. 10-11 класс: учебник для учащихся общеобразовательных
        учреждений (базовый и профильный уровни) / И. М. Смирнова, В. А. Смирнов. – 5-е
        изд., испр. и доп. – М.: Мнемозина, 2008. – 288 с.: ил.</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p class=MsoNormal><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>2.<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>Шарыгин И. Ф.
        Геометрия. 10-11 класс: Учебник для общеобразовательных учебных заведений /
        Шарыгин И. Ф. – М.: Дрофа, 1999. – 208 с.: ил.</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p class=MsoNormal><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>3.<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>Е. В. Потоскуев, Л. И.
        Звалич. Геометрия. 10 класс: Учебник для общеобразовательных учреждений с
        углубленным и профильным изучением математики /Е. В. Потоскуев, Л. И. Звалич. –
        6-е изд., стереотип. – М.: Дрофа, 2008.&nbsp;– 233 с.: ил.</span></p>
    </div>

    <div>
        <p><strong style='box-sizing: inherit'><span style='font-size:
        11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Дополнительные
        рекомендованные ссылки на ресурсы сети Интернет</span></strong></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p class=MsoNormal><span
        style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1.<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>Интернет-портал
        Webmath.exponenta.ru (<a href="http://webmath.exponenta.ru/bsd/tab/m10.html"
        style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>).</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p class=MsoNormal><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>2.<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>СтудопедиЯ (<a
        href="http://studopedia.ru/1_88147_komplanarnie-vektori.html" style='box-sizing: inherit'><span
        style='color:#346BA2'>Источник</span></a>).</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p class=MsoNormal><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>3.<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
        style='font-family:"Helvetica",sans-serif;color:#333333'>Научная библиотека (<a
        href="http://edu.sernam.ru/book_sm_math2.php?id=115" style='box-sizing: inherit'><span
        style='color:#346BA2'>Источник</span></a>).</span></p>
    </div>
</div>

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
