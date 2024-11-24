<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/visits.php'; ?>
<body>
	<div class="container" style="padding: 5px" >
		<div class="row justify-content-center" style="width: 100%;">
			<a href="/Geometry/lecture/index.php"><h2>Лекции</h2></a>			
		</div>
		<div class="row justify-content-center">
			<a href="/Geometry/lecture/11/02/index.php"><h3>11 класс. Тела вращения</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Понятие конуса</h4>			
		</div>
		<div class="text-right">
			<input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
            <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
			<button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
		</div>
		<div style="margin-top:25px;">
						
<div class=WordSection1>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:19.5pt;background:white'><span style='font-size:
16.5pt;font-family:"Helvetica",sans-serif;color:#333333; width:auto;'>Понятие конуса</span></p></div>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/btela-vraweniya-b/ponyatie-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='color:#346BA2;text-decoration:
none'>Введение</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=536 height=211 id="Рисунок 36"
src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277339/942c1540_7110_0133_9e12_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.1.
Предметы конусовидной формы</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>В мире огромное количество вещей имеют форму конуса. Зачастую мы
их даже не замечаем. Дорожные конусы, предупреждающие о дорожных работах, крыши
замков и домов, рожок для мороженого – все эти предметы имеют форму конуса (см.
рис. 1).</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/btela-vraweniya-b/ponyatie-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=55 data-ember-action=""
data-ember-action-1071=1071 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Конус, его элементы и виды конусов</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=85 height=166 id="Рисунок 35"
src="lecture01.files/image002.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277340/94efecf0_7110_0133_9e13_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
2. Прямоугольный треугольник</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим произвольный прямоугольный треугольник с
катетами&nbsp;<img  width=9 height=22 id="Рисунок 34"
src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277341/95bc4070_7110_0133_9e14_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=9 height=22 id="Рисунок 33" src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277342/968da850_7110_0133_9e15_12313c0dade2.png">&nbsp;(см.
рис. 2).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=145 height=186 id="Рисунок 32"
src="lecture01.files/image005.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277343/975ee580_7110_0133_9e16_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
3. Прямой круговой конус</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Вращая данный треугольник вокруг одного из катетов (не нарушая
общности, пусть это будет катет&nbsp;<img width=9 height=22
id="Рисунок 31" src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277341/95bc4070_7110_0133_9e14_12313c0dade2.png">),
гипотенуза опишет поверхность, а катет&nbsp;<img width=9 height=22
id="Рисунок 30" src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277342/968da850_7110_0133_9e15_12313c0dade2.png">&nbsp;опишет
круг. Таким образом, получится тело, которое называют прямым круговым конусом
(см. рис. 3).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=472 height=244 id="Рисунок 29"
src="lecture01.files/image006.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277344/9868ab20_7110_0133_9e17_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
4. Виды конусов</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Раз уж мы говорим о прямом круговом конусе, видимо, существует и
непрямой, и не круговой? Если в основании конуса круг, но вершина не
проектируется в центр этого круга, то такой конус называют наклонным. Если же
основание – не круг, а произвольная фигура, то такое тело также иногда называют
конусом, однако, разумеется, не круговым (см. рис. 4).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Таким образом, мы снова приходим к аналогии, уже знакомой нам по
работе с цилиндрами. По сути конус – это что-то вроде пирамиды, просто у
пирамиды в основании многоугольник, а у конуса (который мы будем рассматривать)
– круг (см. рис. 5).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Отрезок оси вращения (в нашем случае это катет&nbsp;<img
 width=9 height=22 id="Рисунок 28" src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277341/95bc4070_7110_0133_9e14_12313c0dade2.png">),
заключенный внутри конуса, называют осью конуса (см. рис. 6).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=162 height=253 id="Рисунок 27"
src="lecture01.files/image007.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277345/9934fbf0_7110_0133_9e18_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
5. Конус и пирамида</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=162 height=209 id="Рисунок 26"
src="lecture01.files/image008.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277346/9a02bd10_7110_0133_9e19_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
6.&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=20 height=22 id="Рисунок 25"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277347/9ac866d0_7110_0133_9e1a_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;– ось конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=147 height=194 id="Рисунок 24"
src="lecture01.files/image010.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277348/9b8d0d70_7110_0133_9e1b_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
7. Основание конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Круг, образованный вращением второго катета (<img
width=9 height=22 id="Рисунок 23" src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277342/968da850_7110_0133_9e15_12313c0dade2.png">),
называют основанием конуса (см. рис. 7).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>А длина этого катета является радиусом основания конуса (или,
проще говоря, радиусом конуса) (см. рис. 8).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=172 height=208 id="Рисунок 22"
src="lecture01.files/image011.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277349/9c525480_7110_0133_9e1c_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
8.&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=25 height=22 id="Рисунок 21"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277350/9d14adf0_7110_0133_9e1d_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>– радиус конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=158 height=199 id="Рисунок 20"
src="lecture01.files/image013.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277351/9e0e9540_7110_0133_9e1e_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
9.&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=9 height=22 id="Рисунок 19"
src="lecture01.files/image014.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277352/9ed91b20_7110_0133_9e1f_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;– вершина конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Вершина острого угла вращающегося треугольника, лежащая на оси
вращения, называется вершиной конуса (см. рис. 9).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=166 height=219 id="Рисунок 18"
src="lecture01.files/image015.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277353/9fa0dcf0_7110_0133_9e20_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
10.&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=20 height=22 id="Рисунок 17"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277347/9ac866d0_7110_0133_9e1a_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;– высота конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Высота конуса – отрезок, проведенный из вершины конуса
перпендикулярно его основанию (см. рис. 10).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Здесь у вас может возникнуть вопрос: чем же тогда отличается
отрезок оси вращения от высоты конуса? На самом деле они совпадают только в
случае прямого конуса, если же вы будете рассматривать наклонный конус, то
заметите, что это два совершенно разных отрезка (см. рис. 11).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=202 height=183 id="Рисунок 16"
src="lecture01.files/image016.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277354/a067a730_7110_0133_9e21_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
11. Высота в наклонном конусе</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Вернемся к прямому конусу.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=146 height=194 id="Рисунок 15"
src="lecture01.files/image017.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277355/a12dc2b0_7110_0133_9e22_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
12. Образующие конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Отрезки, соединяющие вершину конуса с точками окружности ее
основания, называют образующими конуса. Кстати, все образующие прямого конуса
равны между собой (см. рис. 12).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=573 height=171 id="Рисунок 14"
src="lecture01.files/image018.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277356/a1fd8d10_7110_0133_9e23_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
13. Природные конусоподобные объекты</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>В переводе с греческого konos означает «сосновая шишка». В
природе достаточно объектов, имеющих форму конуса: ель, гора, муравейник и др.
(см. рис. 13).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Но мы-то привыкли, что конус – прямой. У него равные между собой
образующие, а высота совпадает с осью. Такой конус мы назвали прямым конусом. В
курсе школьной геометрии обычно рассматриваются именно прямые конусы, причем по
умолчанию любой конус считается прямым круговым. Но мы уже говорили о том, что
бывают не только прямые конусы, но и наклонные.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/btela-vraweniya-b/ponyatie-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=323 data-ember-action=""
data-ember-action-1073=1073 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Сечения конуса</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=152 height=202 id="Рисунок 13"
src="lecture01.files/image019.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277357/a2c0cca0_7110_0133_9e24_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
14. Перпендикулярное сечение</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Вернемся к прямым конусам. «Разрежем» конус плоскостью,
перпендикулярной оси (см. рис. 14).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Какая же фигура окажется на срезе? Конечно же, круг! Вспомним,
что плоскость проходит перпендикулярно оси, а значит, параллельно основанию,
которое является кругом.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=158 height=201 id="Рисунок 12"
src="lecture01.files/image020.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277358/a3ca45f0_7110_0133_9e25_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
15. Наклонное сечение</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>А теперь давайте постепенно наклонять плоскость сечения. Тогда
наш круг начнет постепенно превращаться во все более вытянутый овал. Но только
до тех пор, пока плоскость сечения не столкнется с окружностью основания (см.
рис. 15).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=345 height=203 id="Рисунок 11"
src="lecture01.files/image021.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277359/a49c8150_7110_0133_9e26_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
16. Виды сечений на примере морковки</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Любители познавать мир экспериментальным путем могут в этом
убедиться с помощью морковки и ножа (попробуйте отрезать от морковки пластинки
под разным углом) (см. рис. 16).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=152 height=190 id="Рисунок 10"
src="lecture01.files/image022.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277360/a565c180_7110_0133_9e27_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
17. Осевое сечение конуса</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Сечение конуса плоскостью, проходящей через его ось, называют
осевым сечением конуса (см. рис. 17).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=168 height=207 id="Рисунок 9"
src="lecture01.files/image023.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277361/a64ff100_7110_0133_9e28_12313c0dade2.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
18. Равнобедренный треугольник – фигура сечения</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Здесь же мы получим совершенно другую фигуру сечения:
треугольник. Данный треугольник является равнобедренным (см. рис. 18).</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/btela-vraweniya-b/ponyatie-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=451 data-ember-action=""
data-ember-action-1075=1075 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Заключение</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>На этом уроке мы узнали о конической поверхности, видах конуса,
элементах конуса и сходстве конуса с пирамидой.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/btela-vraweniya-b/ponyatie-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=496 data-ember-action=""
data-ember-action-1077=1077 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Задача</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Образующая конуса равна 12 см и наклонена к плоскости основания
под углом 30 градусов. Найти площадь осевого сечения конуса.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><strong style='box-sizing: inherit'><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Решение</span></strong></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим искомое осевое сечение. Это равнобедренный
треугольник, в котором боковые стороны равны 12, а угол при основании – 30
градусов. Дальше можно действовать по-разному. Либо можно провести высоту,
найти ее (половина гипотенузы, 6), потом основание (по теореме Пифагора,&nbsp;<img
 width=27 height=24 id="Рисунок 8" src="lecture01.files/image024.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277362/a71e62b0_7110_0133_9e29_12313c0dade2.png">),
а затем площадь&nbsp;<img width=37 height=24 id="Рисунок 7"
src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277363/a7eeeb20_7110_0133_9e2a_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=410 height=194 id="Рисунок 6"
src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277364/a8c037b0_7110_0133_9e2b_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
19. Иллюстрация к задаче</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Либо сразу найти угол при вершине – 120 градусов – и посчитать
площадь как полупроизведение сторон на синус угла между ними (ответ будет, тот
же).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ:&nbsp;<img width=37 height=24 id="Рисунок 5"
src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/277363/a7eeeb20_7110_0133_9e2a_12313c0dade2.png"></span></p>

<div style="width: 600px; margin: 0 auto;">
    <p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;word-spacing:0px; width:auto;'>
        <strong style='box-sizing: inherit'>
            <span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Список рекомендованной литературы</span>
        </strong>
    </p>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Геометрия. Учебник для 10-11 классов. Атанасян Л.С. и др.&nbsp;18-е изд. - М.: Просвещение, 2009. - 255 с.
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>2.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Геометрия 11 класс, А.В. Погорелов, М.: Просвещение, 2002
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>3.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Рабочая тетрадь по геометрии 11 класс,&nbsp;В.Ф. Бутузов, Ю.А. Глазков
            </span>
        </p>
    </div>
    <p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;word-spacing:0px; width:auto;'>
        <strong style='box-sizing: inherit'>
            <span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Рекомендованные ссылки на ресурсы сети Интернет</span>
        </strong>
    </p>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Yaklass.ru (<a href="http://www.yaklass.ru/p/geometria/11-klass/tela-vrashcheniia-10442/konus-9261/re-d6fe0d66-91e2-4612-9b13-e585acfbba97" target="_blank" style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>)
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>2.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Uztest.ru (<a href="http://uztest.ru/abstracts/?idabstract=970472" target="_blank" style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>)
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>3.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Bitclass.ru (<a href="http://bitclass.ru/math/theory/%D0%A1%D1%82%D0%B5%D1%80%D0%B5%D0%BE%D0%BC%D0%B5%D1%82%D1%80%D0%B8%D1%8F/%D0%A2%D0%B5%D0%BB%D0%B0_%D0%B2%D1%80%D0%B0%D1%89%D0%B5%D0%BD%D0%B8%D1%8F" target="_blank" style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>)
            </span>
        </p>
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
