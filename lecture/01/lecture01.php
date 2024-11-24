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
			<a href="/Geometry/lecture/10/01/index.php"><h3>10 класс. Аксиомы стереометрии и их следствия</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Предмет стереометрии. Аксиомы стереометрии</h4>			
		</div>
		<div class="text-right">
			<input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
            <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
			<button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
		</div>
		<div style="margin-top:25px;">
			
		<div class=WordSection1>

<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:19.5pt;background:white; margin:auto;'><span style='font-size:
16.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Предмет стереометрии.
Аксиомы стереометрии</span>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Основными фигурами
стереометрии</span></em><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333; width: 100%'>&nbsp;являются точка, прямая, плоскость. Примеры
стереометрических фигур: шар, сфера, конус, цилиндр, параллелепипед и т.д.</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><a
href="https://interneturok.ru/lesson/geometry/10-klass/aksiomy-stereometrii-i-ih-sledstviya/predmet-stereometrii-aksiomy-stereometrii?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Обозначение основных фигур стереометрии</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=161
height=242 id="Рисунок 42" src="lecture01.files/image001.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33003/64fa59c1bb3141f5c480af3bc4a5fe7c.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 1.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>А, В, С, D</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333; width: 100%'>&nbsp;–
точки. Точки обозначаются прописными латинскими буквами.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333; width: 100%'>АВ =&nbsp;</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=9 height=22 id="Рисунок 41" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png"></span><em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>,&nbsp;CD&nbsp;=
b</span></em><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;
color:#333333'>&nbsp;– прямые. Прямые обозначаются строчными латинскими
буквами.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=0 width=26
height=22 id="Рисунок 40" src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33005/87d6c4254f21551008443561b19f94b9.png"></span><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;–
плоскости. Плоскости обозначаются греческими буквами. (Рис. 1).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим прямую&nbsp;<img width=9 height=22 id="Рисунок 39" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">.
На ней лежат точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>В</span></em>. Прямая&nbsp;<imgwidth=9 height=22 id="Рисунок 38" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">&nbsp;может
быть также обозначена как&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ</span></em>.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333; width: 100%;'>Рассмотрим прямую&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em>, на ней лежат
точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>С</span></em>&nbsp;и&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>D</span></em>. Прямая&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em>&nbsp;может быть также
обозначена как&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>СD</span></em>.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Специфика всей стереометрии
заключается в том, что пространственные фигуры мы будем изображать на
плоскости.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Так же, как и в планиметрии,
важен знак принадлежности,&nbsp;<img width=10 height=22 id="Рисунок 37"
src="lecture01.files/image004.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33006/f7d484693b7eb6df1fce4b6cda39fede.png">.
Например, точка&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А</span></em>&nbsp;принадлежит
прямой&nbsp;<img width=9 height=22 id="Рисунок 36"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">:&nbsp;<img width=38 height=22 id="Рисунок 35" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33007/c27b154970e2b48b36ad221c0274add7.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим плоскость&nbsp;<img width=10 height=22 id="Рисунок 34" src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;(Рис.
1). Точка&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>М</span></em>&nbsp;принадлежит
плоскости&nbsp;<img width=10 height=22 id="Рисунок 33"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">:&nbsp;<img width=43 height=22 id="Рисунок 32" src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33009/4954e48c1232dd5eea731be1d02dc698.png">.
А вот прямая&nbsp;<img width=9 height=22 id="Рисунок 31"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">&nbsp;не
принадлежит плоскости&nbsp;<img  width=10 height=22 id="Рисунок 30"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">:&nbsp;<img
width=39 height=22 id="Рисунок 29" src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33010/5a5c12d4f5b2e61e05f5fbd0c1acd945.png">.&nbsp;</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white; width: 100%;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/aksiomy-stereometrii-i-ih-sledstviya/predmet-stereometrii-aksiomy-stereometrii?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Первая аксиома стереометрии</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Аксиомы стереометрии.</span></em></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><strong><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Аксиома 1 (А1)</span></strong></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Через любые три точки, не
лежащие на одной прямой, проходит плоскость, и притом только одна.&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Пояснение к аксиоме А1.</span></em></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=187
height=123 id="Рисунок 28" src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33011/07c8e826ec5bbe58c4465b4035f9b83f.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333; width: 100%;'>Рис. 2.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим три точки:&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>А, В, С</span></em>, причем
точка&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>С&nbsp;</span></em>не
принадлежит прямой&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВ:</span></em><img
width=50 height=22 id="Рисунок 27" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33012/5e470e22a83917cc17275ec06180c17d.png">&nbsp;(Рис.
2). Тогда через три точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А,
В, С,</span></em>&nbsp;не лежащие на одной прямой, проходит плоскость&nbsp;<img
width=10 height=22 id="Рисунок 26" src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">,
и притом только одна.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Плоскость&nbsp;<img
width=10 height=22 id="Рисунок 25" src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;можно
также обозначить через три точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>АВС.</span></em>&nbsp;</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white; width: 100%;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/aksiomy-stereometrii-i-ih-sledstviya/predmet-stereometrii-aksiomy-stereometrii?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Вторая аксиома стереометрии</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><strong><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Аксиома 2 (А2)</span></strong></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Если две точки прямой лежат в
плоскости, то все точки прямой лежат в этой плоскости.&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>По-иному говорят, что прямая
лежит в плоскости или что плоскость проходит через прямую.&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Пояснение к аксиоме А2.</span></em></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333; width: 100%;'>Рассмотрим плоскость&nbsp;<img
width=10 height=22 id="Рисунок 24" src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">,
точки&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>А, В</span></em>&nbsp;прямой&nbsp;<img
width=9 height=22 id="Рисунок 23" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">&nbsp;принадлежат
плоскости&nbsp;<img width=10 height=22 id="Рисунок 22"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;(Рис.
3).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=186
height=123 id="Рисунок 21" src="lecture01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33013/c5dab1ef58398a4b5bff5e3cce24b36f.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 3.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Аксиома утверждает – все
точки прямой&nbsp;<img width=9 height=22 id="Рисунок 20"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">&nbsp;(прямой&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>АВ</span></em>) принадлежат
плоскости&nbsp;<img width=10 height=22 id="Рисунок 19"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">,
т.е. вся прямая лежит в плоскости&nbsp;<img width=10 height=22
id="Рисунок 18" src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;или
плоскость&nbsp;<img width=10 height=22 id="Рисунок 17"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;проходит
через прямую&nbsp;<img width=9 height=22 id="Рисунок 16"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">.
Смысл заключается в следующем: из того, что только две точки принадлежат
плоскости, вытекает, что бесчисленное множество точек прямой лежат в этой
плоскости.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Эту аксиому можно записать
следующим образом:</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=120
height=37 id="Рисунок 15" src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33014/a0b7ca56da49ee615261739a1bdf772f.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Следствие:&nbsp;</span></em><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Может
ли быть только три общие точки у прямой и плоскости? Нет, не может быть. Может
быть две точки, и тогда вся прямая лежит в плоскости.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Если у прямой и плоскости
одна общая точка&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>М</span></em>,
то тогда говорят, что прямая&nbsp;<img width=9 height=22
id="Рисунок 14" src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">&nbsp;и
плоскость&nbsp;<img width=10 height=22 id="Рисунок 13"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;пересекаются
в точке&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>М&nbsp;</span></em>(Рис.
4). Этот факт записывается следующим образом:&nbsp;<img  width=72
height=22 id="Рисунок 12" src="lecture01.files/image013.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33015/27c87b789d3771de33bf13e754d308cb.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=194
height=162 id="Рисунок 11" src="lecture01.files/image014.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33016/c39aacf552c3dc0cfe09d7092adf076a.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 4.&nbsp;</span></p>

<h2 text-align=center style='margin-top:0cm;text-align:center;background:white'><a
href="https://interneturok.ru/lesson/geometry/10-klass/aksiomy-stereometrii-i-ih-sledstviya/predmet-stereometrii-aksiomy-stereometrii?block=content#mediaplayer"
title="Смотреть в видеоуроке"><b><span style='font-family:"Helvetica",sans-serif;
color:#346BA2;text-decoration:none'>Третья аксиома стереометрии</span></b></a></h2>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white'><strong><span style='font-size:
11.5pt;font-family:"Helvetica",sans-serif;color:#333333; width:100%;'>Аксиома 3 (А3)</span></strong></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Если две плоскости имеют
общую точку, то они имеют общую прямую, на которой лежат все общие точки этих
плоскостей. Говорят, что плоскости пересекаются по прямой.&nbsp;</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><em><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Пояснение к аксиоме А3.</span></em></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Имеем разные плоскости:
плоскость&nbsp;<img width=10 height=22 id="Рисунок 10"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">,
плоскость&nbsp;<img width=10 height=22 id="Рисунок 9"
src="lecture01.files/image015.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33017/a736bdec6eaad52e7edeabc40bc85016.png">.
Известно, что они имеют общую точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>М</span></em>,
точка&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>М</span></em>&nbsp;принадлежит
плоскости&nbsp;<img width=14 height=22 id="Рисунок 8"
src="lecture01.files/image016.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33018/62711ff315d4b90976cfd913d7a88081.png">и
плоскости&nbsp;<img width=10 height=22 id="Рисунок 7"
src="lecture01.files/image015.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33017/a736bdec6eaad52e7edeabc40bc85016.png">.
(Рис. 5)</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=136
height=199 id="Рисунок 6" src="lecture01.files/image017.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33019/10bc37d3079ad00574204561a35dd84e.jpg"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Рис. 5.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Отсюда вытекает, что
существует прямая&nbsp;<img width=9 height=22 id="Рисунок 5"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">,
которая проходит через точку&nbsp;<em><span style='font-family:"Helvetica",sans-serif'>М</span></em>,
которая одновременно принадлежит и плоскости&nbsp;<em><span style='font-family:
"Helvetica",sans-serif'>a</span></em>, и плоскости&nbsp;<em><span
style='font-family:"Helvetica",sans-serif'>b</span></em>. Вот в этом случае и
говорят, что плоскости&nbsp;<img width=10 height=22 id="Рисунок 4"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33008/d3f8ddf14e3852957e170f2ff729725f.png">&nbsp;и&nbsp;<img
 width=10 height=22 id="Рисунок 3" src="lecture01.files/image015.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33017/a736bdec6eaad52e7edeabc40bc85016.png">&nbsp;пересекаются
по прямой&nbsp;<img width=9 height=22 id="Рисунок 2"
src="lecture01.files/image002.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33004/24e8bf6fd550090ca2d414152e7116a3.png">.</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'><img width=141
height=38 id="Рисунок 1" src="lecture01.files/image018.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/33020/65fe8b83853fad4b10c05f8b79291272.png"></span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;background:white; width: 100%;'><span style='font-size:11.5pt;
font-family:"Helvetica",sans-serif;color:#333333'>Смысл аксиом разъясняется в
многочисленных вопросах и задачах. Вот некоторые из них.&nbsp;</span></p>

</div>
		</div>
		<div text-align="center" class="justify-content-center">
			<a style="align:center" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
			<a>|</a>
			<a style="align:center" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
		</div>				
	</div>	<!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/footer.php'; ?>
