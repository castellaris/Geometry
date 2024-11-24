<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/visits.php'; ?>
<body>
	<div class="container" style="padding: 5px; justify-content:center;" >
		<div class="row justify-content-center">
			<a href="/Geometry/lecture/index.php"><h2>Лекции</h2></a>			
		</div>
		<div class="row justify-content-center">
			<a href="/Geometry/lecture/11/01/index.php"><h3>11 класс. Метод координат в пространстве</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Прямоугольная система координат в пространстве. Координаты вектора</h4>			
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
16.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Прямоугольная система
координат в пространстве. Координаты вектора</span></p></div>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bmetod-koordinat-v-prostranstveb/pryamougolnaya-sistema-koordinat-v-prostranstve-koordinaty-vektora#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='color:#346BA2;text-decoration:
none'>Введение</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>В&nbsp;<img width=9 height=22 id="Рисунок 94"
src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310388/dfaa6ae0_ed19_0133_35e5_22000b0c602c.png">&nbsp;классе
мы с вами обсуждали прямоугольную систему координат. Тогда речь шла о
плоскости: у нас были две перпендикулярные оси, и каждую точку плоскости мы
задавали с помощью так называемых координат, то есть величин, которые
требовалось «пройти» до данной точки от начала координат. (См. Рис. 1.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=231 height=204 id="Рисунок 93"
src="lecture01.files/image002.png" alt="Система координат на плоскости"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
1. Система координат на плоскости</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>С помощью координат было удобно решать разные задачи, но мы
применяем их и в жизни. Например, в кинотеатре мы ищем свое кресло сначала по
ряду, а затем по номеру в ряду. (См. Рис. 2.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=611 height=158 id="Рисунок 92"
src="lecture01.files/image003.png"
alt="Место в кинотеатре – модель координатной плоскости"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
2. Место в кинотеатре – модель координатной плоскости</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Но мы живем не в двухмерном пространстве, а в трехмерном.
Поэтому имеет смысл поговорить об аналоге уже привычной нам системы координат,
перенеся ее в пространство.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим такую ситуацию. Предположим, что мы пошли не в кино,
а на балет. У нас есть билет, на котором написаны ряд и место. Можем ли мы
легко найти свое кресло? Да, если речь о партере. Но ведь мы можем сидеть и
выше: в амфитеатре или на любом из ярусов. Поэтому в данном случае мы прибегаем
к трем измерениям: сначала по высоте (ярус, амфитеатр или партер), затем уже
ряд, а затем место. (См. Рис. 3.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=423 height=216 id="Рисунок 91"
src="lecture01.files/image004.jpg"
alt="Расположение мест в театре как пример трехмерной системы координат"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
3. Расположение мест в театре как пример трехмерной системы координат</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Мы пользуемся координатами и тогда, когда выбираем товары в
гипермаркете самообслуживания. Например, мы хотим купить стол и нам дается
инструкция, что он находится в&nbsp;<img width=9 height=22
id="Рисунок 90" src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310388/dfaa6ae0_ed19_0133_35e5_22000b0c602c.png">&nbsp;ряду,
на&nbsp;<img width=9 height=22 id="Рисунок 89"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310392/e0a8a9c0_ed19_0133_35e9_22000b0c602c.png">&nbsp;полке
снизу, место номер&nbsp;<img width=19 height=22 id="Рисунок 88"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310393/e0cb1790_ed19_0133_35ea_22000b0c602c.png">.
Мы сначала ищем ряд (первая координата), затем – место (вторая), потом – полку
(третья). Можно, разумеется, сначала найти полку, а потом место. Так или иначе,
речь идет о трех координатах.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bmetod-koordinat-v-prostranstveb/pryamougolnaya-sistema-koordinat-v-prostranstve-koordinaty-vektora#mediaplayer"
title="Смотреть в видеоуроке" data-time=180 data-ember-action=""
data-ember-action-1071=1071 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Прямоугольная система координат в
пространстве</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим произвольную точку&nbsp;<img  width=11
height=22 id="Рисунок 87" src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310394/e0f4b5c0_ed19_0133_35eb_22000b0c602c.png">&nbsp;пространства.
Проведем через нее три попарно перпендикулярные прямые. На каждой из них
обозначим направление. Это и будут оси координат – теперь их стало три.
Обратите внимание, что ось<img  width=25 height=22 id="Рисунок 86"
src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310395/e11b4b10_ed19_0133_35ec_22000b0c602c.png">&nbsp;направлена
к нам, ось&nbsp;<img  width=21 height=22 id="Рисунок 85"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310396/e1428700_ed19_0133_35ed_22000b0c602c.png">&nbsp;вправо,
а&nbsp;<img width=21 height=22 id="Рисунок 84"
src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310397/e16a7520_ed19_0133_35ee_22000b0c602c.png">&nbsp;–
вверх. Порядок здесь важен, так как такие направления образуют так называемую
правую тройку. (См. Рис. 4.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=262 height=208 id="Рисунок 83"
src="lecture01.files/image011.jpg" alt="Оси координат трехмерного пространства"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
4. Оси координат трехмерного пространства</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Эту картинку можно поворачивать так, как нам удобно. Например,
если мы ее повернем на&nbsp;<img  width=24 height=22 id="Рисунок 82"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310399/e1b61440_ed19_0133_35f0_22000b0c602c.png">&nbsp;против
часовой стрелки в плоскости&nbsp;<img width=31 height=22
id="Рисунок 81" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310400/e1de8a40_ed19_0133_35f1_22000b0c602c.png">,
то получим следующую картинку:&nbsp;<img width=22 height=22
id="Рисунок 80" src="lecture01.files/image014.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310401/e2242990_ed19_0133_35f2_22000b0c602c.png">&nbsp;вправо,&nbsp;<img
 width=21 height=22 id="Рисунок 79" src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310396/e1428700_ed19_0133_35ed_22000b0c602c.png">&nbsp;–
вглубь,&nbsp;<img  width=21 height=22 id="Рисунок 78"
src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310397/e16a7520_ed19_0133_35ee_22000b0c602c.png">&nbsp;–
вверх. (См. Рис. 5.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=233 height=258 id="Рисунок 77"
src="lecture01.files/image015.png"
alt="Поворот «тройки» на  против часовой стрелки в плоскости "></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
5. Поворот «тройки» на&nbsp;</span></span><span style='font-size:10.0pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=24
height=22 id="Рисунок 76" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310399/e1b61440_ed19_0133_35f0_22000b0c602c.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;против часовой стрелки в плоскости&nbsp;</span></span><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=31 height=22 id="Рисунок 75" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310400/e1de8a40_ed19_0133_35f1_22000b0c602c.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Все это допустимые картинки, выбирайте любую из них. Некоторым
удобна последняя, ведь она получается естественным образом из плоскостной. (См.
Рис. 6.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=231 height=221 id="Рисунок 74"
src="lecture01.files/image016.jpg"
alt="К системе координат на плоскости добавили ось "></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
6. К системе координат на плоскости добавили ось&nbsp;</span></span><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=21 height=22 id="Рисунок 73" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310397/e16a7520_ed19_0133_35ee_22000b0c602c.png"></span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bmetod-koordinat-v-prostranstveb/pryamougolnaya-sistema-koordinat-v-prostranstve-koordinaty-vektora#mediaplayer"
title="Смотреть в видеоуроке" data-time=227 data-ember-action=""
data-ember-action-1073=1073 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Ветка. Правая и левая тройки</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Рассмотрим тройку векторов&nbsp;<img width=9 height=22
id="Рисунок 72" src="lecture01.files/image017.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310404/e2a0fa00_ed19_0133_35f5_22000b0c602c.png">,&nbsp;<img
width=9 height=25 id="Рисунок 71" src="lecture01.files/image018.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310405/e2c640b0_ed19_0133_35f6_22000b0c602c.png">,&nbsp;<img
 width=7 height=22 id="Рисунок 70" src="lecture01.files/image019.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310406/e2ea2420_ed19_0133_35f7_22000b0c602c.png">,
отложенных от одной точки&nbsp;<img width=11 height=22 id="Рисунок 69"
src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310394/e0f4b5c0_ed19_0133_35eb_22000b0c602c.png">.
Эта тройка векторов называется правой, если векторы располагаются так, как
расположены соответственно большой, указательный и средний пальцы правой руки.
В противном случае тройка называется левой.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>На рисунке (См. Рис. 7.) справа изображена правая тройка
векторов, а слева – левая. Это также полностью соответствует правилам правой и
левой руки из физики.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=293 height=168 id="Рисунок 68"
src="lecture01.files/image020.png" alt="Левая и правая тройки"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
7. Левая и правая тройки</span></span></span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bmetod-koordinat-v-prostranstveb/pryamougolnaya-sistema-koordinat-v-prostranstve-koordinaty-vektora#mediaplayer"
title="Смотреть в видеоуроке" data-time=275 data-ember-action=""
data-ember-action-1075=1075 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Координаты точки в пространстве</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Оси обозначаются&nbsp;<img  width=22 height=22
id="Рисунок 67" src="lecture01.files/image014.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310401/e2242990_ed19_0133_35f2_22000b0c602c.png">&nbsp;(ось
абсцисс),&nbsp;<img  width=21 height=22 id="Рисунок 66"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310396/e1428700_ed19_0133_35ed_22000b0c602c.png">&nbsp;(ось
ординат) и&nbsp;<img  width=21 height=22 id="Рисунок 65"
src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310397/e16a7520_ed19_0133_35ee_22000b0c602c.png">&nbsp;(ось
аппликат). (См. Рис. 8.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=357 height=267 id="Рисунок 64"
src="lecture01.files/image021.png" alt="Названия координатных осей"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
8. Названия координатных осей</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Соответствующие плоскости –&nbsp;<img  width=31
height=22 id="Рисунок 63" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310400/e1de8a40_ed19_0133_35f1_22000b0c602c.png">,&nbsp;<img
idth=30 height=22 id="Рисунок 62" src="lecture01.files/image022.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310409/e3587b90_ed19_0133_35fa_22000b0c602c.png">,&nbsp;<img
width=31 height=22 id="Рисунок 61" src="lecture01.files/image023.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310410/e381ea20_ed19_0133_35fb_22000b0c602c.png">&nbsp;–
координатные плоскости. (См. Рис. 9.) Как и на плоскости, у каждой оси в
пространстве есть положительное направление и отрицательное.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=352 height=298 id="Рисунок 60"
src="lecture01.files/image024.png" alt="Координатные плоскости"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
9. Координатные плоскости</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Координаты точки в пространстве определяются аналогично
плоскостным. Рассмотрим произвольную точку&nbsp;<img  width=14
height=22 id="Рисунок 59" src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310412/e3ea3dd0_ed19_0133_35fd_22000b0c602c.png">&nbsp;и
проведем через нее плоскости, параллельные координатным. Эти плоскости
пересекут наши оси в точках&nbsp;<img  width=10 height=22
id="Рисунок 58" src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310413/e4126b40_ed19_0133_35fe_22000b0c602c.png">&nbsp;(точка
пересечения параллельной плоскости с осью&nbsp;<img width=22
height=22 id="Рисунок 57" src="lecture01.files/image014.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310401/e2242990_ed19_0133_35f2_22000b0c602c.png">),&nbsp;<img
width=11 height=22 id="Рисунок 56" src="lecture01.files/image027.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310414/e4324010_ed19_0133_35ff_22000b0c602c.png">&nbsp;(точка
пересечения параллельной плоскости с осью&nbsp;<img  width=21
height=22 id="Рисунок 55" src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310396/e1428700_ed19_0133_35ed_22000b0c602c.png">)
и&nbsp;<img  width=10 height=22 id="Рисунок 54"
src="lecture01.files/image028.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310415/e4583780_ed19_0133_3600_22000b0c602c.png">&nbsp;(точка
пересечения параллельной плоскости с осью&nbsp;<img  width=21
height=22 id="Рисунок 53" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310397/e16a7520_ed19_0133_35ee_22000b0c602c.png">).
(См. Рис. 10.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=636 height=185 id="Рисунок 52"
src="lecture01.files/image029.png"
alt="Точки пересечения параллельных плоскостей с осями координат"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
10. Точки пересечения параллельных плоскостей с осями координат</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Тогда абсцисса точки&nbsp;<img  width=14 height=22
id="Рисунок 51" src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310412/e3ea3dd0_ed19_0133_35fd_22000b0c602c.png">&nbsp;–
это&nbsp;<img  width=21 height=22 id="Рисунок 50"
src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310417/e4b5d360_ed19_0133_3602_22000b0c602c.png">&nbsp;(в
случае если&nbsp;<img width=10 height=22 id="Рисунок 49"
src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310413/e4126b40_ed19_0133_35fe_22000b0c602c.png">&nbsp;лежит
на положительной полуоси) и&nbsp;<img width=34 height=22
id="Рисунок 48" src="lecture01.files/image031.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310418/e5024a80_ed19_0133_3603_22000b0c602c.png">,
если&nbsp;<img  width=10 height=22 id="Рисунок 47"
src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310413/e4126b40_ed19_0133_35fe_22000b0c602c.png">&nbsp;–
на отрицательной. (См. Рис. 11.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=254 height=216 id="Рисунок 46"
src="lecture01.files/image032.jpg"
alt="Абсцисса точки  в зависимости от расположения точки "></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
11. Абсцисса точки&nbsp;</span></span><span style='font-size:10.0pt;font-family:
"Helvetica",sans-serif;color:#333333'><img  width=14 height=22
id="Рисунок 45" src="lecture01.files/image025.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310412/e3ea3dd0_ed19_0133_35fd_22000b0c602c.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;в зависимости от расположения точки&nbsp;</span></span><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=10 height=22 id="Рисунок 44" src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310413/e4126b40_ed19_0133_35fe_22000b0c602c.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Аналогично определяются ордината и аппликата. Записывают
координаты в круглых скобках через точку с запятой:&nbsp;<img
width=67 height=22 id="Рисунок 43" src="lecture01.files/image033.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310420/e5a46c60_ed19_0133_3605_22000b0c602c.png">,
где&nbsp;<img  width=61 height=22 id="Рисунок 42"
src="lecture01.files/image034.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310421/e6269120_ed19_0133_3606_22000b0c602c.png">,&nbsp;<img
width=62 height=22 id="Рисунок 41" src="lecture01.files/image035.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310422/e6769360_ed19_0133_3607_22000b0c602c.png">,&nbsp;<img
 width=60 height=22 id="Рисунок 40" src="lecture01.files/image036.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310423/e6d97400_ed19_0133_3608_22000b0c602c.png">&nbsp;(либо&nbsp;<img
 width=34 height=22 id="Рисунок 39" src="lecture01.files/image031.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310418/e5024a80_ed19_0133_3603_22000b0c602c.png">,&nbsp;<img
width=34 height=22 id="Рисунок 38" src="lecture01.files/image037.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310424/e70fcc20_ed19_0133_3609_22000b0c602c.png">,&nbsp;<img
 width=34 height=22 id="Рисунок 37" src="lecture01.files/image038.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310425/e753d2c0_ed19_0133_360a_22000b0c602c.png">&nbsp;–
в зависимости от расположения на осях координат). Не пишите координаты точки
через запятую, чтобы не спутать с десятичными дробями.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>У точки могут быть и нулевые координаты, если она лежит в
координатной плоскости. Например, если взять точку в плоскости&nbsp;<img
 width=31 height=22 id="Рисунок 36" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310400/e1de8a40_ed19_0133_35f1_22000b0c602c.png">,
то ее координаты имеют вид&nbsp;<img  width=54 height=22 id="Рисунок 35"
src="lecture01.files/image039.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310426/e7844ba0_ed19_0133_360b_22000b0c602c.png">.
А точка на оси&nbsp;<img  width=21 height=22 id="Рисунок 34"
src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310396/e1428700_ed19_0133_35ed_22000b0c602c.png">&nbsp;имеет
координаты&nbsp;<img  width=54 height=22 id="Рисунок 33"
src="lecture01.files/image040.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310427/e7c432a0_ed19_0133_360c_22000b0c602c.png">.
Начало же координат – точка&nbsp;<img  width=11 height=22
id="Рисунок 32" src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310394/e0f4b5c0_ed19_0133_35eb_22000b0c602c.png">&nbsp;–
имеет координаты&nbsp;<img  width=54 height=22 id="Рисунок 31"
src="lecture01.files/image041.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310428/e7ff9920_ed19_0133_360d_22000b0c602c.png">.
(См. Рис. 12.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img width=254 height=199 id="Рисунок 30"
src="lecture01.files/image042.jpg" alt="Точки с нулевыми координатами"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
12. Точки с нулевыми координатами</span></span></span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bmetod-koordinat-v-prostranstveb/pryamougolnaya-sistema-koordinat-v-prostranstve-koordinaty-vektora#mediaplayer"
title="Смотреть в видеоуроке" data-time=467 data-ember-action=""
data-ember-action-1077=1077 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Координаты вектора в пространстве</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Как и на плоскости, отложим на каждой оси от начала координат в
положительном направлении по вектору, длины которых будут равны&nbsp;<img
 width=9 height=22 id="Рисунок 29" src="lecture01.files/image043.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310430/e84b36d0_ed19_0133_360f_22000b0c602c.png">.
Эти векторы называют единичными, или ортами. Обозначают их соответственно&nbsp;<img
 width=5 height=22 id="Рисунок 28" src="lecture01.files/image044.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310431/e88767c0_ed19_0133_3610_22000b0c602c.png">,&nbsp;<img
width=6 height=22 id="Рисунок 27" src="lecture01.files/image045.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310432/e8af6a50_ed19_0133_3611_22000b0c602c.png">,&nbsp;<img
 width=12 height=25 id="Рисунок 26" src="lecture01.files/image046.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310433/e8d5faa0_ed19_0133_3612_22000b0c602c.png">&nbsp;(См.
Рис. 13.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=293 height=294 id="Рисунок 25"
src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310434/e8fdf610_ed19_0133_3613_22000b0c602c.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
13. Орты&nbsp;</span></span><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'><img  width=5 height=22 id="Рисунок 24"
src="lecture01.files/image044.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310431/e88767c0_ed19_0133_3610_22000b0c602c.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>,&nbsp;</span></span><span style='font-size:10.0pt;font-family:
"Helvetica",sans-serif;color:#333333'><img  width=6 height=22
id="Рисунок 23" src="lecture01.files/image045.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310432/e8af6a50_ed19_0133_3611_22000b0c602c.png"></span><span
class=caption><span style='font-size:10.0pt;font-family:"Helvetica",sans-serif;
color:#333333'>,&nbsp;</span></span><span style='font-size:10.0pt;font-family:
"Helvetica",sans-serif;color:#333333'><img  width=9 height=25
id="Рисунок 22" src="lecture01.files/image048.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310435/e9247db0_ed19_0133_3614_22000b0c602c.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Эти векторы не компланарны, то есть не лежат в одной плоскости,
а значит, каждый вектор пространства можно единственным образом разложить по
векторам&nbsp;<img  width=5 height=22 id="Рисунок 21"
src="lecture01.files/image044.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310431/e88767c0_ed19_0133_3610_22000b0c602c.png">,&nbsp;<img
width=6 height=22 id="Рисунок 20" src="lecture01.files/image045.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310432/e8af6a50_ed19_0133_3611_22000b0c602c.png">,&nbsp;<img
 width=9 height=25 id="Рисунок 19" src="lecture01.files/image048.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310435/e9247db0_ed19_0133_3614_22000b0c602c.png">:&nbsp;<img
 width=151 height=25 id="Рисунок 18" src="lecture01.files/image049.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310436/e94abdc0_ed19_0133_3615_22000b0c602c.png">.
Такие коэффициенты&nbsp;<img  width=9 height=22 id="Рисунок 17"
src="lecture01.files/image050.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310437/e9708150_ed19_0133_3616_22000b0c602c.png">;&nbsp;<img
 width=9 height=22 id="Рисунок 16" src="lecture01.files/image051.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310438/e995cd30_ed19_0133_3617_22000b0c602c.png">;&nbsp;<img
 width=7 height=22 id="Рисунок 15" src="lecture01.files/image052.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310439/e9bad640_ed19_0133_3618_22000b0c602c.png">&nbsp;называют
координатами вектора и пишут:&nbsp;<img  width=70 height=22
id="Рисунок 14" src="lecture01.files/image053.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310440/e9dfb8a0_ed19_0133_3619_22000b0c602c.png">&nbsp;–
в фигурных скобках. (См. Рис. 14.)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='box-sizing: inherit'><span class=caption><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
14. Координаты вектора через орты</span></span></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>Так, например, вектор&nbsp;<img width=62 height=22
id="Рисунок 12" src="lecture01.files/image055.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/310442/ea457580_ed19_0133_361b_22000b0c602c.png">.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white;
box-sizing: inherit;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;word-spacing:0px; width:auto;'><span
style='font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/11-klass/bmetod-koordinat-v-prostranstveb/pryamougolnaya-sistema-koordinat-v-prostranstve-koordinaty-vektora#mediaplayer"
title="Смотреть в видеоуроке" data-time=553 data-ember-action=""
data-ember-action-1079=1079 style='box-sizing: inherit'><b><span
style='color:#346BA2;text-decoration:none'>Заключение</span></b></a></span></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white;box-sizing: inherit;font-variant-ligatures: normal;
font-variant-caps: normal;orphans: 2;text-align:start;widows: 2;-webkit-text-stroke-width: 0px;
text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;
word-spacing:0px; width:auto;'><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>На этом уроке мы познакомились с понятием «система координат в
пространстве» и выяснили, как задаются координаты точки и координаты вектора.</span></p>

<div>
    <p><strong style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Список литературы</strong></p>

    <div style="width: 600px; margin: 0 auto;">
        <p><span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1. И. М. Смирнова, В. А. Смирнов. Геометрия. 10-11 класс: учебник для учащихся общеобразовательных учреждений (базовый и профильный уровни) / И. М. Смирнова, В. А. Смирнов. – 5-е изд., испр. и доп. – М.: Мнемозина, 2008. – 288 с.: ил.</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p><span style='font-family:"Helvetica",sans-serif;color:#333333'>2. Шарыгин И. Ф. Геометрия. 10-11 класс: Учебник для общеобразовательных учебных заведений / Шарыгин И. Ф. – М.: Дрофа, 1999. – 208 с.: ил.</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p><span style='font-family:"Helvetica",sans-serif;color:#333333'>3. Е. В. Потоскуев, Л. И. Звалич. Геометрия. 10 класс: Учебник для общеобразовательных учреждений с углубленным и профильным изучением математики / Е. В. Потоскуев, Л. И. Звалич. – 6-е изд., стереотип. – М.: Дрофа, 2008. – 233 с.: ил.</span></p>
    </div>

    <p><strong style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Дополнительные рекомендованные ссылки на ресурсы сети Интернет</strong></p>

    <div style="width: 600px; margin: 0 auto;">
        <p><span style='font-size:12.0pt;font-family:"Helvetica",sans-serif;color:#333333'>1. Интернет-портал Webmath.exponenta.ru (<a href="http://webmath.exponenta.ru/bsd/tab/m10.html" style='color:#346BA2'>Источник</a>).</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p><span style='font-family:"Helvetica",sans-serif;color:#333333'>2. СтудопедиЯ (<a href="http://studopedia.ru/1_88147_komplanarnie-vektori.html" style='color:#346BA2'>Источник</a>).</span></p>
    </div>

    <div style="width: 600px; margin: 0 auto;">
        <p><span style='font-family:"Helvetica",sans-serif;color:#333333'>3. Научная библиотека (<a href="http://edu.sernam.ru/book_sm_math2.php?id=115" style='color:#346BA2'>Источник</a>).</span></p>
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
