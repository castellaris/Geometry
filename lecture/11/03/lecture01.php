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
			<a href="/Geometry/lecture/11/03/index.php"><h3>11 класс. Объёмы тел</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Объем пирамиды и конуса</h4>			
		</div>
		<div class="text-right">
			<input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
            <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
			<button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
		</div>
		<div style="margin-top:25px;">
						
<div class=WordSection1>

<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:19.5pt;background:white; width:auto;'><span style='font-size:
16.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Объем пирамиды и
конуса</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='color:#346BA2;text-decoration:
none'>Введение</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Легко или сложно вычислять объемы? Пока мы умеем находить лишь
объемы параллелепипедов, цилиндров и призм, поэтому задача вычисления объемов
кажется довольно легкой. Действительно, и формулы доказывались без труда, и
вычисления были не слишком громоздкими. Собственно, формула для нахождения
объема прямоугольного параллелепипеда известна еще с начальной школы.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Идея была относительно проста. Мы ввели объем куба, через него
нашли объем прямоугольного параллелепипеда, по сути, «разбив» его на кубики,
отсюда пришли к призмам, а от них – к цилиндрам. Но в случае пирамиды и конуса
«разбить» их на кубики не получится.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Хотя древние греки пробовали. В V веке до н. э. греческим
математиком Демокритом было высказано предположение, что объем пирамиды равен
трети объема призмы с тем же основанием и той же высотой. Доказать это не смог
ни он, ни получивший позднее тот же результат Евклид. Впрочем, данная формула
подтверждалась практикой – действительно, мы можем измерить объем любой
конкретной пирамиды с любой степенью точности. Например, если взять пирамидку и
заполнить ее чем-нибудь (водой, песком), а потом вычислить объем того, чем мы
заполняли. Впрочем, ученые и по сей день пытаются разбить призму на три равных
пирамиды, что доказало бы формулу.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=105 data-ember-action=""
data-ember-action-1071=1071 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Объем пирамиды и усеченной пирамиды</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>В наши дни формула давно доказана. И сделано это с помощью
интегралов. Помним, что&nbsp;<img width=100 height=29 id="Рисунок 152"
src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298627/9686cee0_c13d_0133_d973_12313c0dade2.png">,
где&nbsp;<img width=31 height=22 id="Рисунок 151"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298628/97525dd0_c13d_0133_d974_12313c0dade2.png">&nbsp;–
это площадь сечения фигуры плоскостью, перпендикулярной некоторой оси, которую
мы провели.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>С помощью этого метода выведем объем пирамиды. Начнем с объема
треугольной пирамиды.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим пирамиду&nbsp;<img width=42 height=22
id="Рисунок 150" src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298629/982008d0_c13d_0133_d975_12313c0dade2.png">&nbsp;(<img
width=11 height=22 id="Рисунок 149" src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298630/98fdeae0_c13d_0133_d976_12313c0dade2.png">&nbsp;–
вершина), обозначим ее объем через&nbsp;<img width=11 height=22
id="Рисунок 148" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298631/99dbfa30_c13d_0133_d977_12313c0dade2.png">;
площадь ее основания&nbsp;<img width=60 height=22 id="Рисунок 147"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298632/9aae0640_c13d_0133_d978_12313c0dade2.png">;
ее высота&nbsp;<img width=56 height=22 id="Рисунок 146"
src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298633/9b8546b0_c13d_0133_d979_12313c0dade2.png">&nbsp;(см.
Рис. 1).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=222 height=175 id="Рисунок 145"
src="lecture01.files/image008.jpg" alt=Пирамида></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
1. Пирамида&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=42 height=22 id="Рисунок 144"
src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298629/982008d0_c13d_0133_d975_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Проведем ось&nbsp;<img width=22 height=22
id="Рисунок 143" src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298635/9d6adfd0_c13d_0133_d97b_12313c0dade2.png">,
совпадающую с лучом&nbsp;<img width=22 height=22 id="Рисунок 142"
src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298636/9e38ab60_c13d_0133_d97c_12313c0dade2.png">.
Рассмотрим произвольную точку&nbsp;<img width=14 height=22
id="Рисунок 141" src="lecture01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298637/9f0c4160_c13d_0133_d97d_12313c0dade2.png">&nbsp;на
этой оси внутри пирамиды. Через эту точку проведем сечение&nbsp;<img
width=49 height=22 id="Рисунок 140" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298638/9fdbb640_c13d_0133_d97e_12313c0dade2.png">,
перпендикулярное нашей оси. Помним, что&nbsp;<img width=100 height=29
id="Рисунок 139" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298639/a0a60750_c13d_0133_d97f_12313c0dade2.png">,
где&nbsp;<img width=31 height=22 id="Рисунок 138"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298628/97525dd0_c13d_0133_d974_12313c0dade2.png">&nbsp;–
площадь сечения&nbsp;<img width=49 height=22 id="Рисунок 137"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298638/9fdbb640_c13d_0133_d97e_12313c0dade2.png">&nbsp;(см.
Рис. 2). Выразим, чему равно&nbsp;<img width=31 height=22
id="Рисунок 136" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298628/97525dd0_c13d_0133_d974_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=284 height=232 id="Рисунок 135"
src="lecture01.files/image014.png"
alt="Проведенные ось  и перпендикулярное оси сечение"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
2. Проведенные ось&nbsp;</span></span><span style='font-size:10.0pt;font-family:
"Helvetica",sans-serif;color:#333333'><img width=22 height=22
id="Рисунок 134" src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298635/9d6adfd0_c13d_0133_d97b_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;и перпендикулярное оси сечение&nbsp;</span></span><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=49 height=22 id="Рисунок 133" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298638/9fdbb640_c13d_0133_d97e_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Заметим, что&nbsp;<img width=110 height=22
id="Рисунок 132" src="lecture01.files/image015.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298641/a2407050_c13d_0133_d981_12313c0dade2.png">:
из того, что плоскости&nbsp;<img width=49 height=22 id="Рисунок 131"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298638/9fdbb640_c13d_0133_d97e_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=31 height=22 id="Рисунок 130" src="lecture01.files/image016.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298642/a308fdf0_c13d_0133_d982_12313c0dade2.png">&nbsp;перпендикулярны
оси&nbsp;<img  width=22 height=22 id="Рисунок 129"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298635/9d6adfd0_c13d_0133_d97b_12313c0dade2.png">,
следует, что плоскости параллельны, а значит,&nbsp;<img  width=69
height=22 id="Рисунок 128" src="lecture01.files/image017.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298643/a41e94e0_c13d_0133_d983_12313c0dade2.png">,&nbsp;<img
 width=69 height=22 id="Рисунок 127" src="lecture01.files/image018.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298644/a50b61b0_c13d_0133_d984_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=71 height=22 id="Рисунок 126" src="lecture01.files/image019.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298645/a5da3cf0_c13d_0133_d985_12313c0dade2.png">.
Тогда получается, что&nbsp;<img width=105 height=22 id="Рисунок 125"
src="lecture01.files/image020.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298646/a6a6d000_c13d_0133_d986_12313c0dade2.png">,&nbsp;<img
 width=105 height=22 id="Рисунок 124" src="lecture01.files/image021.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298647/a77ab570_c13d_0133_d987_12313c0dade2.png">&nbsp;и&nbsp;<img
width=107 height=22 id="Рисунок 123" src="lecture01.files/image022.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298648/a85c3300_c13d_0133_d988_12313c0dade2.png">,
откуда следует, что&nbsp;<img  width=191 height=30 id="Рисунок 122"
src="lecture01.files/image023.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298649/a929ade0_c13d_0133_d989_12313c0dade2.png">&nbsp;(по
третьему признаку подобия) (см. Рис. 3).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=252 height=198 id="Рисунок 121"
src="lecture01.files/image024.png" alt="Подобные треугольники"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
3. Подобные треугольники</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Найдем, чему равен коэффициент подобия&nbsp;<img 
width=9 height=22 id="Рисунок 120" src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298651/aabed1c0_c13d_0133_d98b_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим&nbsp;<img width=42 height=22 id="Рисунок 119"
src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298652/abf1a250_c13d_0133_d98c_12313c0dade2.png">&nbsp;и&nbsp;<img
width=51 height=22 id="Рисунок 118" src="lecture01.files/image027.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298653/acc99270_c13d_0133_d98d_12313c0dade2.png">.
Они подобны с тем же коэффициентом&nbsp;<img  width=9 height=22
id="Рисунок 117" src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298651/aabed1c0_c13d_0133_d98b_12313c0dade2.png">,
т. к.&nbsp;<img  width=94 height=30 id="Рисунок 116"
src="lecture01.files/image028.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298654/ada737d0_c13d_0133_d98e_12313c0dade2.png">,
а значит,&nbsp;<img width=91 height=30 id="Рисунок 115"
src="lecture01.files/image029.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298655/ae7526c0_c13d_0133_d98f_12313c0dade2.png">.
Из условия&nbsp;<img width=60 height=22 id="Рисунок 114"
src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298656/af440e20_c13d_0133_d990_12313c0dade2.png">&nbsp;и
пусть&nbsp;<img  width=56 height=22 id="Рисунок 113"
src="lecture01.files/image031.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298657/b0101ac0_c13d_0133_d991_12313c0dade2.png">,
тогда&nbsp;<img width=83 height=22 id="Рисунок 112"
src="lecture01.files/image032.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298658/b0dab9c0_c13d_0133_d992_12313c0dade2.png">.
Получаем, что&nbsp;<img  width=92 height=30 id="Рисунок 111"
src="lecture01.files/image033.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298659/b1a74c30_c13d_0133_d993_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Учитывая, что&nbsp;<img  width=89 height=34
id="Рисунок 110" src="lecture01.files/image034.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298660/b26f3d20_c13d_0133_d994_12313c0dade2.png">,
получаем&nbsp;<img  width=82 height=32 id="Рисунок 109"
src="lecture01.files/image035.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298661/b37f5980_c13d_0133_d995_12313c0dade2.png">;&nbsp;<img
 width=96 height=32 id="Рисунок 108" src="lecture01.files/image036.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298662/b44f5400_c13d_0133_d996_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Окончательно,</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;<img  width=589 height=35 id="Рисунок 107"
src="lecture01.files/image037.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298663/b51ac9d0_c13d_0133_d997_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Итак, мы доказали, что объем треугольной пирамиды&nbsp;<img
 width=70 height=30 id="Рисунок 106" src="lecture01.files/image038.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298664/b5e5bc00_c13d_0133_d998_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Осталось вывести формулу для произвольной пирамиды. Это делается
просто: разбиваем произвольную пирамиду на треугольные (см. Рис. 4).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=244 height=199 id="Рисунок 105"
src="lecture01.files/image039.png"
alt="Разбиение произвольной пирамиды на треугольные"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
4. Разбиение произвольной пирамиды на треугольные</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Тогда&nbsp;<img width=568 height=30 id="Рисунок 104"
src="lecture01.files/image040.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298666/b78a59c0_c13d_0133_d99a_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Итак, окончательно, теорема, которую мы доказали: объем пирамиды
равен трети произведения площади ее основания и высоты&nbsp;<img
width=70 height=30 id="Рисунок 103" src="lecture01.files/image038.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298664/b5e5bc00_c13d_0133_d998_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>В качестве следствия можно доказать и формулу для вычисления
объема усеченной пирамиды (см. Рис. 10):&nbsp;<img width=204
height=30 id="Рисунок 102" src="lecture01.files/image041.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298667/b8578140_c13d_0133_d99b_12313c0dade2.png">,
где&nbsp;<img width=9 height=22 id="Рисунок 101"
src="lecture01.files/image042.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298668/b92243c0_c13d_0133_d99c_12313c0dade2.png">&nbsp;–
высота усеченной пирамиды, а&nbsp;<img width=19 height=22
id="Рисунок 100" src="lecture01.files/image043.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298669/b9ebfd60_c13d_0133_d99d_12313c0dade2.png">и<img
 width=19 height=22 id="Рисунок 99" src="lecture01.files/image044.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298670/baf8a5b0_c13d_0133_d99e_12313c0dade2.png">&nbsp;–
площади ее оснований.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=170 height=168 id="Рисунок 98"
src="lecture01.files/image045.png" alt="Усеченная пирамида"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
10. Усеченная пирамида</span></span></span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=446 data-ember-action=""
data-ember-action-1073=1073 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Доказательство (без интеграла)</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Докажем, что&nbsp;<img width=89 height=30
id="Рисунок 97" src="lecture01.files/image046.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298672/bc986e40_c13d_0133_d9a0_12313c0dade2.png">.
Как и в первом доказательстве, мы докажем формулу для треугольной пирамиды, а
как она обобщается до произвольной, вы уже знаете.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Пусть&nbsp;<img width=39 height=22 id="Рисунок 96"
src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298673/bd64e430_c13d_0133_d9a1_12313c0dade2.png">&nbsp;–
треугольная пирамида,&nbsp;<img width=9 height=22 id="Рисунок 95"
src="lecture01.files/image048.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298674/be303820_c13d_0133_d9a2_12313c0dade2.png">&nbsp;–
вершина,&nbsp;<img width=41 height=22 id="Рисунок 94"
src="lecture01.files/image049.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298675/bf05f350_c13d_0133_d9a3_12313c0dade2.png">&nbsp;–
основание (см. Рис. 5).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=227 height=223 id="Рисунок 93"
src="lecture01.files/image050.png" alt="треугольная пирамида"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
5.&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=39 height=22 id="Рисунок 92"
src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298673/bd64e430_c13d_0133_d9a1_12313c0dade2.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;– треугольная пирамида</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Дополним эту пирамиду до призмы с тем же основанием и высотой
(см. Рис. 6).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=224 height=243 id="Рисунок 91"
src="lecture01.files/image051.png" alt=Призма></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;Рис.
6. Призма&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=71 height=22 id="Рисунок 90"
src="lecture01.files/image052.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298678/c164a880_c13d_0133_d9a6_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Эта призма составлена из трех пирамид: данной&nbsp;<img
 width=39 height=22 id="Рисунок 89" src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298673/bd64e430_c13d_0133_d9a1_12313c0dade2.png">,&nbsp;<img
 width=46 height=22 id="Рисунок 88" src="lecture01.files/image053.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298679/c26fbd00_c13d_0133_d9a7_12313c0dade2.png">&nbsp;и&nbsp;<img
 width=51 height=22 id="Рисунок 87" src="lecture01.files/image054.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298680/c33e1eb0_c13d_0133_d9a8_12313c0dade2.png">&nbsp;(см.
Рис. 7).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=584 height=201 id="Рисунок 86"
src="lecture01.files/image055.png" alt="Призма из трех пирамид"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
7. Призма из трех пирамид</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим исходную пирамиду&nbsp;<img width=39
height=22 id="Рисунок 85" src="lecture01.files/image056.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298682/c4ed08e0_c13d_0133_d9aa_12313c0dade2.png">&nbsp;и
пирамиду&nbsp;<img width=45 height=22 id="Рисунок 84"
src="lecture01.files/image057.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298683/c5bc4d20_c13d_0133_d9ab_12313c0dade2.png">.
Заметим, что у них&nbsp;<img width=105 height=22 id="Рисунок 83"
src="lecture01.files/image058.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298684/c6885350_c13d_0133_d9ac_12313c0dade2.png">&nbsp;(как
треугольники, образовавшиеся при проведении диагонали&nbsp;<img
width=19 height=22 id="Рисунок 82" src="lecture01.files/image059.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298685/c753f500_c13d_0133_d9ad_12313c0dade2.png">&nbsp;в
параллелограмме&nbsp;<img width=47 height=22 id="Рисунок 81"
src="lecture01.files/image060.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298686/c82738e0_c13d_0133_d9ae_12313c0dade2.png">).
Высоты, проведенные из точки&nbsp;<img width=10 height=22
id="Рисунок 80" src="lecture01.files/image061.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298687/c8f61a90_c13d_0133_d9af_12313c0dade2.png">&nbsp;на
каждую из этих плоскостей, совпадают&nbsp;<img width=54 height=22
id="Рисунок 79" src="lecture01.files/image062.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298688/c9bfe110_c13d_0133_d9b0_12313c0dade2.png">&nbsp;(см.
Рис. 8).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=197 height=216 id="Рисунок 78"
src="lecture01.files/image063.png" alt="Высота, проведенная к плоскости"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
8. Высота, проведенная к плоскости&nbsp;</span></span><span style='font-size:
10.0pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=47 height=22 id="Рисунок 77" src="lecture01.files/image060.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298686/c82738e0_c13d_0133_d9ae_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Раз у пирамид&nbsp;<img width=39 height=22
id="Рисунок 76" src="lecture01.files/image056.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298682/c4ed08e0_c13d_0133_d9aa_12313c0dade2.png">&nbsp;и&nbsp;<img
width=45 height=22 id="Рисунок 75" src="lecture01.files/image057.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298683/c5bc4d20_c13d_0133_d9ab_12313c0dade2.png">&nbsp;равны
высоты и основания, то равны и объемы&nbsp;<img width=104 height=24
id="Рисунок 74" src="lecture01.files/image064.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298690/cba06550_c13d_0133_d9b2_12313c0dade2.png">(следует
из равенства объемов равновеликих тел).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Аналогично если рассмотреть пирамиды&nbsp;<img 
width=51 height=22 id="Рисунок 73" src="lecture01.files/image054.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298680/c33e1eb0_c13d_0133_d9a8_12313c0dade2.png">и&nbsp;<img
 width=46 height=22 id="Рисунок 72" src="lecture01.files/image065.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298691/cc6bed50_c13d_0133_d9b3_12313c0dade2.png">,
то&nbsp;<img width=113 height=24 id="Рисунок 71"
src="lecture01.files/image066.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298692/cd371a90_c13d_0133_d9b4_12313c0dade2.png">,
т. к.&nbsp;<img  width=120 height=22 id="Рисунок 70"
src="lecture01.files/image067.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298693/ce028c70_c13d_0133_d9b5_12313c0dade2.png">&nbsp;(как
треугольники, образовавшиеся при проведении диагонали&nbsp;<img 
width=27 height=22 id="Рисунок 69" src="lecture01.files/image068.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298694/cecd4bf0_c13d_0133_d9b6_12313c0dade2.png">&nbsp;в
параллелограмме&nbsp;<img  width=54 height=22 id="Рисунок 68"
src="lecture01.files/image069.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298695/cf983880_c13d_0133_d9b7_12313c0dade2.png">).
Высоты, проведенные из точки&nbsp;<img  width=9 height=22
id="Рисунок 67" src="lecture01.files/image048.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298674/be303820_c13d_0133_d9a2_12313c0dade2.png">&nbsp;на
каждую из этих плоскостей, совпадают&nbsp;<img  width=54 height=22
id="Рисунок 66" src="lecture01.files/image062.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298688/c9bfe110_c13d_0133_d9b0_12313c0dade2.png">&nbsp;(см.
Рис. 9). То есть площади оснований и высоты равны.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=204 height=218 id="Рисунок 65"
src="lecture01.files/image070.png" alt="Высота, проведенная к плоскости"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
9. Высота, проведенная к плоскости&nbsp;</span></span><span style='font-size:
10.0pt;font-family:"Helvetica",sans-serif;color:#333333'><img 
width=54 height=22 id="Рисунок 64" src="lecture01.files/image069.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298695/cf983880_c13d_0133_d9b7_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Получили, что все три пирамиды имеют один и тот же объем&nbsp;<img
 width=175 height=24 id="Рисунок 63" src="lecture01.files/image071.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298697/d1289b00_c13d_0133_d9b9_12313c0dade2.png">,
то есть&nbsp;<img  width=322 height=24 id="Рисунок 62"
src="lecture01.files/image072.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298698/d2374380_c13d_0133_d9ba_12313c0dade2.png">,
откуда&nbsp;<img width=74 height=30 id="Рисунок 61"
src="lecture01.files/image073.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298699/d3057920_c13d_0133_d9bb_12313c0dade2.png">.
Теорема доказана.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=464 data-ember-action=""
data-ember-action-1075=1075 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Объем усеченной пирамиды</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Итак, пусть у усеченной пирамиды&nbsp;<img width=99
height=22 id="Рисунок 60" src="lecture01.files/image074.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298700/d3d02f00_c13d_0133_d9bc_12313c0dade2.png">&nbsp;основания
имеют площади&nbsp;<img width=36 height=22 id="Рисунок 59"
src="lecture01.files/image075.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298701/d49cc280_c13d_0133_d9bd_12313c0dade2.png">;
высота –&nbsp;<img width=9 height=22 id="Рисунок 58"
src="lecture01.files/image042.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298668/b92243c0_c13d_0133_d99c_12313c0dade2.png">.
Достроим эту усеченную пирамиду до обычной пирамиды. Пусть&nbsp;<img 
width=11 height=22 id="Рисунок 57" src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298630/98fdeae0_c13d_0133_d976_12313c0dade2.png">&nbsp;–
вершина пирамиды. Опустим высоту, она пересечет основания в точках&nbsp;<img
 width=22 height=22 id="Рисунок 56" src="lecture01.files/image076.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298702/d566d210_c13d_0133_d9be_12313c0dade2.png">и<img
width=22 height=22 id="Рисунок 55" src="lecture01.files/image077.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298703/d6314690_c13d_0133_d9bf_12313c0dade2.png">&nbsp;соответственно.
Пусть&nbsp;<img  width=61 height=22 id="Рисунок 54"
src="lecture01.files/image078.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298704/d6fad4c0_c13d_0133_d9c0_12313c0dade2.png">&nbsp;(см.
Рис. 11).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=212 height=163 id="Рисунок 53"
src="lecture01.files/image079.png" alt="Иллюстрация к условию"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
11. Иллюстрация к условию</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Заметим, что&nbsp;<img width=130 height=22
id="Рисунок 52" src="lecture01.files/image080.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298706/d891f410_c13d_0133_d9c2_12313c0dade2.png">&nbsp;и
коэффициент подобия&nbsp;<img width=54 height=42 id="Рисунок 51"
src="lecture01.files/image081.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298707/d9ae9b50_c13d_0133_d9c3_12313c0dade2.png">&nbsp;(обосновывалось
раннее).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Тогда очевидно, что объем усеченной пирамиды равен разности
объемов большой пирамиды и малой, то есть:</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;<img width=322 height=30 id="Рисунок 50"
src="lecture01.files/image082.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298708/da91d6d0_c13d_0133_d9c4_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Осталось найти&nbsp;<img  width=9 height=22
id="Рисунок 49" src="lecture01.files/image083.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298709/db8bde20_c13d_0133_d9c5_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Из того, что&nbsp;<img  width=132 height=22
id="Рисунок 48" src="lecture01.files/image084.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298710/dc604160_c13d_0133_d9c6_12313c0dade2.png">&nbsp;получаем
&nbsp;<img  width=74 height=42 id="Рисунок 47"
src="lecture01.files/image085.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298711/dd347c90_c13d_0133_d9c7_12313c0dade2.png">&nbsp;(в
силу того что это соответствующие отрезки подобных фигур, чьи площади нам
известны).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>С другой стороны,&nbsp;<img width=127 height=22
id="Рисунок 46" src="lecture01.files/image086.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298712/de08da20_c13d_0133_d9c8_12313c0dade2.png">&nbsp;(было
выведено ранее), тогда&nbsp;<img  width=112 height=42 id="Рисунок 45"
src="lecture01.files/image087.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298713/ded9a0c0_c13d_0133_d9c9_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Значит,&nbsp;<img  width=133 height=26 id="Рисунок 44"
src="lecture01.files/image088.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298714/dfa21960_c13d_0133_d9ca_12313c0dade2.png">;&nbsp;<img
 width=91 height=42 id="Рисунок 43" src="lecture01.files/image089.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298715/e06ee510_c13d_0133_d9cb_12313c0dade2.png">;&nbsp;<img
 width=79 height=37 id="Рисунок 42" src="lecture01.files/image090.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298716/e1803f70_c13d_0133_d9cc_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Окончательно,</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=342 height=52 id="Рисунок 41"
src="lecture01.files/image091.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298717/e25854d0_c13d_0133_d9cd_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=573 height=52 id="Рисунок 40"
src="lecture01.files/image092.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298718/e3281160_c13d_0133_d9ce_12313c0dade2.png"></span><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><br>
в силу формулы разности кубов. Что и требовалось доказать.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=485 data-ember-action=""
data-ember-action-1077=1077 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Пример 1</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Закрепим выведенную формулу объема пирамиды примером.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Чему равен объем&nbsp;<img width=11 height=22
id="Рисунок 39" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298631/99dbfa30_c13d_0133_d977_12313c0dade2.png">&nbsp;правильной
треугольной пирамиды&nbsp;<img width=39 height=22 id="Рисунок 38"
src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298673/bd64e430_c13d_0133_d9a1_12313c0dade2.png">,
если&nbsp;<imgwidth=51 height=22 id="Рисунок 37"
src="lecture01.files/image093.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298719/e3f2b180_c13d_0133_d9cf_12313c0dade2.png">,&nbsp;<img
width=49 height=22 id="Рисунок 36" src="lecture01.files/image094.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298720/e4be4c80_c13d_0133_d9d0_12313c0dade2.png">?
(См. Рис. 12.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=231 height=223 id="Рисунок 35"
src="lecture01.files/image095.png" alt="Иллюстрация к задаче"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
12. Иллюстрация к задаче</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><em style='box-sizing: inherit'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Решение.</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;Как
мы знаем,&nbsp;<img width=70 height=30 id="Рисунок 34"
src="lecture01.files/image038.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298664/b5e5bc00_c13d_0133_d998_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Поскольку в основании лежит правильный треугольник (см. Рис.
13), то&nbsp;<img width=155 height=34 id="Рисунок 33"
src="lecture01.files/image096.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298722/e65a8ca0_c13d_0133_d9d2_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=203 height=198 id="Рисунок 32"
src="lecture01.files/image097.png" alt="Правильный треугольник в основании"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
13. Правильный треугольник в основании</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Найдем высоту&nbsp;<img width=20 height=22
id="Рисунок 31" src="lecture01.files/image098.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298724/e8008620_c13d_0133_d9d4_12313c0dade2.png">&nbsp;из
прямоугольного треугольника&nbsp;<img  width=39 height=22
id="Рисунок 30" src="lecture01.files/image099.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298725/e90ec540_c13d_0133_d9d5_12313c0dade2.png">.
Гипотенуза&nbsp;<img  width=49 height=22 id="Рисунок 29"
src="lecture01.files/image100.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298726/e9e050a0_c13d_0133_d9d6_12313c0dade2.png">&nbsp;,
а катет&nbsp;<img  width=25 height=22 id="Рисунок 28"
src="lecture01.files/image101.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298727/eaacada0_c13d_0133_d9d7_12313c0dade2.png">–
радиус описанной окружности, который равен&nbsp;<img  width=21
height=34 id="Рисунок 27" src="lecture01.files/image102.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298728/eb76a920_c13d_0133_d9d8_12313c0dade2.png">,
то есть&nbsp;<img  width=112 height=34 id="Рисунок 26"
src="lecture01.files/image103.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298729/ec42d3a0_c13d_0133_d9d9_12313c0dade2.png">&nbsp;(см.
Рис. 14).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=232 height=218 id="Рисунок 25"
src="lecture01.files/image104.png" alt=Стороны></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
14. Стороны&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=39 height=22 id="Рисунок 24"
src="lecture01.files/image099.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298725/e90ec540_c13d_0133_d9d5_12313c0dade2.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Отсюда по теореме Пифагора&nbsp;<img  width=240
height=24 id="Рисунок 23" src="lecture01.files/image105.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298731/eddb1460_c13d_0133_d9db_12313c0dade2.png">.
А значит, объем равен</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=147 height=30 id="Рисунок 22"
src="lecture01.files/image106.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298732/eea36cd0_c13d_0133_d9dc_12313c0dade2.png"></span><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Ответ:&nbsp;<img width=27 height=24 id="Рисунок 21"
src="lecture01.files/image107.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298733/ef6bcf60_c13d_0133_d9dd_12313c0dade2.png">.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=575 data-ember-action=""
data-ember-action-1079=1079 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Объем конуса и усеченного конуса</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Теорема. Объем конуса (см. Рис. 15) равен&nbsp;<img \
width=125 height=30 id="Рисунок 20" src="lecture01.files/image108.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298734/f07a5190_c13d_0133_d9de_12313c0dade2.png">,
где&nbsp;<img width=11 height=22 id="Рисунок 19"
src="lecture01.files/image109.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298735/f1484970_c13d_0133_d9df_12313c0dade2.png">&nbsp;–
радиус основания конуса,&nbsp;<img width=9 height=22 id="Рисунок 18"
src="lecture01.files/image042.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298668/b92243c0_c13d_0133_d99c_12313c0dade2.png">&nbsp;–
его высота.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=179 height=150 id="Рисунок 17"
src="lecture01.files/image110.png" alt=Конус></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
15. Конус</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Формула для вычисления объема конуса в точности совпадает с
аналогичной формулой для пирамиды, так как конус – это, по сути, и есть
пирамида, только в основании лежит «бесконечноугольник» – окружность (см. Рис.
16).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=180 height=173 id="Рисунок 16"
src="lecture01.files/image111.png" alt="Многоугольник, стремящийся к окружности"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
16. Многоугольник, стремящийся к окружности</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Если подставить в формулу объема пирамиды площадь основания конуса,
то есть площадь круга, то мы и приходим к формуле&nbsp;<img  width=77
height=30 id="Рисунок 15" src="lecture01.files/image112.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298738/f3b2c2f0_c13d_0133_d9e2_12313c0dade2.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Доказывается же формула для конуса абсолютно аналогично
пирамиде. Рассматривается такая же ось, отмечается точно такое же подобие, а
дальше берется тот же самый интеграл (см. Рис. 17).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=194 height=194 id="Рисунок 14"
src="lecture01.files/image113.png" alt="Иллюстрация для доказательства формулы"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
17. Иллюстрация для доказательства формулы</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Аналогичным выглядит и следствие про усеченный конус (см. Рис.
18):&nbsp;<img width=364 height=30 id="Рисунок 13"
src="lecture01.files/image114.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298740/f548a7f0_c13d_0133_d9e4_12313c0dade2.png">&nbsp;Доказательство
абсолютно аналогично тому, что было приведено для усеченной пирамиды.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=216 height=145 id="Рисунок 12"
src="lecture01.files/image115.png" alt="Усеченная пирамида"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
18. Усеченная пирамида</span></span></span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bobyomy-telb/ob-em-piramidy-i-konusa?block=content#mediaplayer"
title="Смотреть в видеоуроке" data-time=668 data-ember-action=""
data-ember-action-1081=1081 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Заключение</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Сегодня были выведены новые формулы: объема пирамиды&nbsp;<img
width=57 height=30 id="Рисунок 11" src="lecture01.files/image116.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298742/f6da4a60_c13d_0133_d9e6_12313c0dade2.png">&nbsp;и
объема конуса&nbsp;<img  width=125 height=30 id="Рисунок 10"
src="lecture01.files/image108.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298734/f07a5190_c13d_0133_d9de_12313c0dade2.png">,
объема усеченных пирамиды и конуса&nbsp;<img  width=173 height=30
id="Рисунок 9" src="lecture01.files/image117.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/298743/f7e70fc0_c13d_0133_d9e7_12313c0dade2.png">&nbsp;–
и был разобран пример, иллюстрирующий эти формулы. Более подробно разобраться с
формулами поможет решение задач с использованием этих формул.</span></p>

<div style="width: 600px; margin: 0 auto;">
    <p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;word-spacing:0px; width:auto;'>
        <strong style='box-sizing: inherit'>
            <span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Список литературы</span>
        </strong>
    </p>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Геометрия. Учебник для 10-11 классов. Атанасян Л.С. и др.&nbsp;18-е изд. – М.: Просвещение, 2009. – 255 с.
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>2.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                А.В. Погорелов. Геометрия 11 класс. – М.: Просвещение, 2002.
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>3.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Бутузов В.Ф., Глазков Ю.А., Юдина И.И. Геометрия. 11 класс. Рабочая тетрадь. 8-е изд. – М.: Просвещение, 2013. – 78 с.
            </span>
        </p>
    </div>
    <p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;word-spacing:0px; width:auto;'>
        <strong style='box-sizing: inherit'>
            <span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Дополнительные рекомендованные ссылки на ресурсы сети Интернет</span>
        </strong>
    </p>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Edu.sernam.ru (<a href="http://edu.sernam.ru/book_el_math.php?id=248" style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>).
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>2.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Yaklass.ru&nbsp;(<a href="http://www.yaklass.ru/p/geometria/11-klass/obemy-tel-10440/obem-naklonnoi-prizmy-piramidy-i-konusa-9287/re-6f40ed1a-a707-49ef-bdc5-1294779ea719" style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>).
            </span>
        </p>
    </div>
    <div style="width: auto;">
        <p class=MsoNormal>
            <span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>3.
                <span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>
                Yaklass.ru&nbsp;(<a href="http://www.yaklass.ru/p/geometria/11-klass/obemy-tel-10440/obem-naklonnoi-prizmy-piramidy-i-konusa-9287/re-9b696f15-4954-42f6-870b-ff095411b7a9" style='box-sizing: inherit'><span style='color:#346BA2'>Источник</span></a>).
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
