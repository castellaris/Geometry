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
			<a href="/Geometry/lecture/10/03/index.php"><h3>10 класс. Перпендикулярность прямых и плоскостей</h3></a>				
		</div>
		<div class="row justify-content-center" style="margin: 5px">
			<h4>Угол между прямой и плоскостью</h4>			
		</div>
		<div class="text-right">
			<input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
            <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
			<button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
		</div>
		<div style="margin-top:25px;">
			
		<div class=WordSection1>

<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;background:white; width: 100%; margin-left:auto;'><b><span
style='font-size:18.0pt;font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/perpendikulyarnost-pryamyh-i-ploskostejb/ugol-mezhdu-pryamoy-i-ploskostyu?block=content#mediaplayer"
title="Смотреть в видеоуроке"><span style='color:#346BA2;font-weight:normal;
text-decoration:none'>Введение</span></a></span></b></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Наверняка
вы слышали такое выражение: «Солнечный луч падает под углом…». (См. Рис. 1.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=342 height=285 id="Рисунок 155"
src="lecture01.files/image001.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316366/05bef9a0_4546_0134_37c1_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
1. Падает солнечный луч</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>По
сути, здесь идет речь об угле между прямой, частью которой является луч, и
«плоскостью» земной поверхности (хотя она, конечно, не совсем плоская).</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Мы
привыкли, что угол бывает между двумя лучами (см. Рис. 2) или прямыми (см. Рис.
3).</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=186 height=199 id="Рисунок 154"
src="lecture01.files/image002.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316367/05f31490_4546_0134_37c2_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
2. Угол между лучами</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=306 height=265 id="Рисунок 153"
src="lecture01.files/image003.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316368/062743f0_4546_0134_37c3_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
3. Угол между прямыми</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Как
же определить угол между прямой и плоскостью?</span></p>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
    <p class="MsoNormal text-align=center" style="margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal;background:white; max-width: 100%; margin-right: auto; margin-left: auto;">
        <b><span style="font-size:18.0pt;font-family:'Helvetica',sans-serif;color:#333333">
                <a href="https://interneturok.ru/lesson/geometry/10-klass/perpendikulyarnost-pryamyh-i-ploskostejb/ugol-mezhdu-pryamoy-i-ploskostyu?block=content#mediaplayer"
                    title="Смотреть в видеоуроке">
                    <span style="color:#346BA2;font-weight:normal;text-decoration:none">Определение</span>
                </a>
            </span>
        </b>
    </p>
</div>


<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Углом
между прямой и плоскостью</span></b><span style='font-size:11.5pt;font-family:
"Helvetica",sans-serif;color:#333333'>&nbsp;называют угол между прямой и ее
проекцией на эту плоскость.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Чтобы
построить проекцию прямой на плоскость, достаточно опустить из любых двух ее
точек перпендикуляры на плоскость (спроектировать эти точки), после чего
провести через них прямую – это и будет проекция (см. Рис. 4).</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=510 height=196 id="Рисунок 152"
src="lecture01.files/image004.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316369/0659ec40_4546_0134_37c4_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
4. Угол между прямой и плоскостью</span></p>

<p style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Так,
проекции всех точек данной прямой будут лежать на одной прямой.</span></p>

<div class=MsoNormal text-align=center style='margin-top:13.5pt;margin-right:0cm;
margin-bottom:13.5pt;margin-left:0cm;text-align:center;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>

<hr size=0 width="100%" noshade style='color:#333333' text-align=center>

</span></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Доказательство</span></b></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Пусть&nbsp;<img
 width=10 height=22 id="Рисунок 151" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">&nbsp;–
точка пересечения прямой&nbsp;<img  width=9 height=22 id="Рисунок 150"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316371/06b81660_4546_0134_37c6_22000b0c602c.png">&nbsp;и
плоскости&nbsp;<img width=10 height=22 id="Рисунок 149"
src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316372/06e87eb0_4546_0134_37c7_22000b0c602c.png">,&nbsp;<img
 width=11 height=22 id="Рисунок 148" src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316373/07157680_4546_0134_37c8_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=10 height=22 id="Рисунок 147" src="lecture01.files/image009.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316374/076e1040_4546_0134_37c9_22000b0c602c.png">&nbsp;–
точки на прямой&nbsp;<img width=9 height=22 id="Рисунок 146"
src="lecture01.files/image006.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316371/06b81660_4546_0134_37c6_22000b0c602c.png">,&nbsp;<img
 width=17 height=22 id="Рисунок 145" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316375/079cf9f0_4546_0134_37ca_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=15 height=22 id="Рисунок 144" src="lecture01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316376/07ccaed0_4546_0134_37cb_22000b0c602c.png">&nbsp;–
их проекции на плоскость&nbsp;<img width=10 height=22 id="Рисунок 143"
src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316372/06e87eb0_4546_0134_37c7_22000b0c602c.png">.
Докажем, что&nbsp;<img  width=10 height=22 id="Рисунок 142"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">,&nbsp;<img
 width=17 height=22 id="Рисунок 141" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316375/079cf9f0_4546_0134_37ca_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=15 height=22 id="Рисунок 140" src="lecture01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316376/07ccaed0_4546_0134_37cb_22000b0c602c.png">&nbsp;лежат
на одной прямой&nbsp;<img width=9 height=22 id="Рисунок 139"
src="lecture01.files/image012.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316377/07ff0010_4546_0134_37cc_22000b0c602c.png">.
(См. Рис. 5.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=485 height=224 id="Рисунок 138"
src="lecture01.files/image013.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316378/082418b0_4546_0134_37cd_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
5. Иллюстрация к доказательству</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333; width: 100%;'>Заметим,
что&nbsp;<img width=70 height=22 id="Рисунок 137"
src="lecture01.files/image014.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316379/08484d50_4546_0134_37ce_22000b0c602c.png">,
так как&nbsp;<img width=57 height=22 id="Рисунок 136"
src="lecture01.files/image015.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316380/086c81f0_4546_0134_37cf_22000b0c602c.png">,&nbsp;<img
 width=55 height=22 id="Рисунок 135" src="lecture01.files/image016.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316381/08905a90_4546_0134_37d0_22000b0c602c.png">.
Значит если рассмотреть плоскость&nbsp;<img  width=36 height=22
id="Рисунок 134" src="lecture01.files/image017.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316382/08b39c10_4546_0134_37d1_22000b0c602c.png">,
то точки&nbsp;<img  width=11 height=22 id="Рисунок 133"
src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316373/07157680_4546_0134_37c8_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=17 height=22 id="Рисунок 132" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316375/079cf9f0_4546_0134_37ca_22000b0c602c.png">&nbsp;будут
принадлежать ей. Но плоскость&nbsp;<img  width=36 height=22
id="Рисунок 131" src="lecture01.files/image017.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316382/08b39c10_4546_0134_37d1_22000b0c602c.png">&nbsp;пересекает
исходную плоскость по некоторой прямой. (См. Рис. 6.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=510 height=234 id="Рисунок 130"
src="lecture01.files/image018.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316383/08d92130_4546_0134_37d2_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
6. Пересечение плоскостей</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Значит
раз точки&nbsp;<img width=10 height=22 id="Рисунок 129"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">,&nbsp;<img
 width=15 height=22 id="Рисунок 128" src="lecture01.files/image011.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316376/07ccaed0_4546_0134_37cb_22000b0c602c.png">&nbsp;и&nbsp;<img
width=17 height=22 id="Рисунок 127" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316375/079cf9f0_4546_0134_37ca_22000b0c602c.png">&nbsp;принадлежат
обеим плоскостям, то они лежат на этой прямой, что и требовалось доказать.</span></p>

<div class=MsoNormal text-align=center style='margin-top:13.5pt;margin-right:0cm;
margin-bottom:13.5pt;margin-left:0cm;text-align:center;line-height:normal; width: 100%;'><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>

<hr size=0 width="100%" noshade style='color:#333333' text-align=center>

</span></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333; width: 100%;'>То
есть мы свели новое определение к углу между прямыми, который мы уже знаем.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Обратите
внимание на частую ошибку, которую допускают ученики. Углом между прямой и
плоскостью называется угол именно между прямой и ее проекцией, а не между
прямой и любой прямой в плоскости. Потому как такие углы могут быть разными.</span></p>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:18.0pt;font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/perpendikulyarnost-pryamyh-i-ploskostejb/ugol-mezhdu-pryamoy-i-ploskostyu?block=content#mediaplayer"
title="Смотреть в видеоуроке"><span style='color:#346BA2;font-weight:normal;
text-decoration:none'>Пример (куб)</span></a></span></b></p></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим
куб&nbsp;<img width=108 height=22 id="Рисунок 126"
src="lecture01.files/image019.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316384/08fe08c0_4546_0134_37d3_22000b0c602c.png">.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white'><i><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Решение</span></i></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>А
Найдите угол между прямой&nbsp;<img width=27 height=22 id="Рисунок 125"
src="lecture01.files/image020.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316385/0937ee00_4546_0134_37d4_22000b0c602c.png">&nbsp;и
плоскостью&nbsp;<img width=31 height=22 id="Рисунок 124"
src="lecture01.files/image021.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316386/095c0f20_4546_0134_37d5_22000b0c602c.png">.
(См. Рис. 7.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=228 height=244 id="Рисунок 123"
src="lecture01.files/image022.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316387/09819400_4546_0134_37d6_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
7. Иллюстрация к примеру А</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Как
мы знаем, искомый угол – это угол между самой прямой и ее проекцией.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Чтобы
построить проекцию прямой на плоскость, достаточно взять две точки. Одной из
них будет точка пересечения прямой и плоскости – точка&nbsp;<img 
width=10 height=22 id="Рисунок 122" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">.
Второй – проекция точки&nbsp;<img  width=17 height=22 id="Рисунок 121"
src="lecture01.files/image023.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316388/09a6f2c0_4546_0134_37d7_22000b0c602c.png">&nbsp;–
точка&nbsp;<img width=12 height=22 id="Рисунок 120"
src="lecture01.files/image024.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316389/09cb4a60_4546_0134_37d8_22000b0c602c.png">,
т. к. боковое ребро куба перпендикулярно плоскости основания. (См. Рис. 8.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=244 height=263 id="Рисунок 119"
src="lecture01.files/image025.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316390/09f15c50_4546_0134_37d9_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
8.&nbsp;<img width=92 height=22 id="Рисунок 118"
src="lecture01.files/image026.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316391/0a150c10_4546_0134_37da_22000b0c602c.png">,
следовательно, точка&nbsp;<img width=12 height=22 id="Рисунок 117"
src="lecture01.files/image024.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316389/09cb4a60_4546_0134_37d8_22000b0c602c.png">&nbsp;–
проекция точки&nbsp;<img width=17 height=22 id="Рисунок 116"
src="lecture01.files/image023.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316388/09a6f2c0_4546_0134_37d7_22000b0c602c.png">&nbsp;на
плоскость&nbsp;<img width=31 height=22 id="Рисунок 115"
src="lecture01.files/image021.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316386/095c0f20_4546_0134_37d5_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Значит,
искомый угол – это угол&nbsp;<img width=39 height=22 id="Рисунок 114"
src="lecture01.files/image027.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316392/0a396a20_4546_0134_37db_22000b0c602c.png">&nbsp;(см.
Рис. 9), а он равен&nbsp;<img width=24 height=22 id="Рисунок 113"
src="lecture01.files/image028.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316393/0a5ec050_4546_0134_37dc_22000b0c602c.png">,
так как это угол между диагональю и стороной квадрата.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=238 height=267 id="Рисунок 112"
src="lecture01.files/image029.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316394/0a841bb0_4546_0134_37dd_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
9. Искомый угол</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Обратите
внимание, что если взять вместо&nbsp;<img width=22 height=22
id="Рисунок 111" src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316395/0abd35d0_4546_0134_37de_22000b0c602c.png">&nbsp;другую
прямую из плоскости основания, например&nbsp;<img width=20 height=22
id="Рисунок 110" src="lecture01.files/image031.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316396/0aee06c0_4546_0134_37df_22000b0c602c.png">,
то угол будет другим – в данном случае&nbsp;<img width=24 height=22
id="Рисунок 109" src="lecture01.files/image032.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316397/0b12e350_4546_0134_37e0_22000b0c602c.png">,
так как треугольник&nbsp;<img width=37 height=22 id="Рисунок 108"
src="lecture01.files/image033.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316398/0b37ead0_4546_0134_37e1_22000b0c602c.png">&nbsp;равносторонний
(все стороны – диагонали граней). (См. Рис. 10.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=221 height=242 id="Рисунок 107"
src="lecture01.files/image034.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316399/0b5ee600_4546_0134_37e2_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
10. Угол в равностороннем треугольнике</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Так
что угол между прямой и плоскостью – это совсем не угол между прямой и любой
прямой в плоскости.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Б)
Чему равен угол между&nbsp;<img width=27 height=22 id="Рисунок 106"
src="lecture01.files/image035.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316400/0b8350d0_4546_0134_37e3_22000b0c602c.png">&nbsp;и&nbsp;<img width=37 height=22 id="Рисунок 105" src="lecture01.files/image036.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316401/0ba71390_4546_0134_37e4_22000b0c602c.png">?
(См. Рис. 11.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=216 height=232 id="Рисунок 104"
src="lecture01.files/image037.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316402/0bcded30_4546_0134_37e5_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
11. Иллюстрация к примеру Б</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Как
мы знаем, искомый угол – это угол между самой прямой и ее проекцией.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Чтобы
построить проекцию прямой на плоскость, достаточно взять две точки. Одной из
них будет точка пересечения прямой и плоскости – точка&nbsp;<img 
width=17 height=22 id="Рисунок 103" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316375/079cf9f0_4546_0134_37ca_22000b0c602c.png">.
Второй – проекция точки&nbsp;<img width=12 height=22 id="Рисунок 102"
src="lecture01.files/image024.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316389/09cb4a60_4546_0134_37d8_22000b0c602c.png">&nbsp;–
точка&nbsp;<img width=10 height=22 id="Рисунок 101"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">,
т. к. боковое ребро куба перпендикулярно плоскости основания (см. Рис. 12).</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=204 height=232 id="Рисунок 100"
src="lecture01.files/image038.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316403/0bf5cbf0_4546_0134_37e6_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
12.&nbsp;<img width=98 height=22 id="Рисунок 99"
src="lecture01.files/image039.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316404/0c1e4650_4546_0134_37e7_22000b0c602c.png">,
следовательно, точка&nbsp;<img  width=10 height=22 id="Рисунок 98"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">&nbsp;–
проекция точки&nbsp;<img width=12 height=22 id="Рисунок 97"
src="lecture01.files/image024.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316389/09cb4a60_4546_0134_37d8_22000b0c602c.png">&nbsp;на
плоскость&nbsp;<img width=44 height=22 id="Рисунок 96"
src="lecture01.files/image040.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316405/0c5a7e40_4546_0134_37e8_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Значит,
искомый угол –&nbsp;<img  width=37 height=22 id="Рисунок 95"
src="lecture01.files/image041.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316406/0c7e12c0_4546_0134_37e9_22000b0c602c.png">&nbsp;(см.
Рис. 13).</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=229 height=237 id="Рисунок 94" src="lecture01.files/image042.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316407/0ca44c70_4546_0134_37ea_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
13. Искомый угол</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Его
можно найти из треугольника&nbsp;<img  width=37 height=22
id="Рисунок 93" src="lecture01.files/image041.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316406/0c7e12c0_4546_0134_37e9_22000b0c602c.png">&nbsp;(см.
Рис. 14).</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=198 height=213 id="Рисунок 92" src="lecture01.files/image043.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316408/0ccca6d0_4546_0134_37eb_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
14. Треугольник&nbsp;<img width=37 height=22 id="Рисунок 91"
src="lecture01.files/image041.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316406/0c7e12c0_4546_0134_37e9_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Треугольник
прямоугольный, т. к.&nbsp;<img width=98 height=22 id="Рисунок 90"
src="lecture01.files/image039.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316404/0c1e4650_4546_0134_37e7_22000b0c602c.png">,&nbsp;<img
width=104 height=22 id="Рисунок 89" src="lecture01.files/image044.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316409/0cf10890_4546_0134_37ec_22000b0c602c.png">,
значит,&nbsp;<img width=69 height=22 id="Рисунок 88"
src="lecture01.files/image045.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316410/0d18f5a0_4546_0134_37ed_22000b0c602c.png">&nbsp;(см.
Рис. 15).</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=223 height=298 id="Рисунок 87" src="lecture01.files/image046.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316411/0d3f7470_4546_0134_37ee_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
15. Выносной рисунок треугольника&nbsp;<img width=37 height=22
id="Рисунок 86" src="lecture01.files/image041.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316406/0c7e12c0_4546_0134_37e9_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Если
взять сторону куба за&nbsp;<img width=9 height=22 id="Рисунок 85"
src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316412/0d6415c0_4546_0134_37ef_22000b0c602c.png">,
тогда&nbsp;<img width=51 height=22 id="Рисунок 84"
src="lecture01.files/image048.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316413/0d8904e0_4546_0134_37f0_22000b0c602c.png">,&nbsp;<img
width=67 height=24 id="Рисунок 83" src="lecture01.files/image049.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316414/0dad0110_4546_0134_37f1_22000b0c602c.png">&nbsp;и&nbsp;<img
width=140 height=24 id="Рисунок 82" src="lecture01.files/image050.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316415/0de78c90_4546_0134_37f2_22000b0c602c.png">.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Ответ:</span></b><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;<img
width=123 height=22 id="Рисунок 81" src="lecture01.files/image051.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316416/0e0cbdd0_4546_0134_37f3_22000b0c602c.png">,&nbsp;<img
width=177 height=24 id="Рисунок 80" src="lecture01.files/image052.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316417/0e30c850_4546_0134_37f4_22000b0c602c.png">.</span></p>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:18.0pt;font-family:"Helvetica",sans-serif;color:#333333; text-align:center;'><a
href="https://interneturok.ru/lesson/geometry/10-klass/perpendikulyarnost-pryamyh-i-ploskostejb/ugol-mezhdu-pryamoy-i-ploskostyu?block=content#mediaplayer"
title="Смотреть в видеоуроке"><span style='color:#346BA2;font-weight:normal;
text-decoration:none'>Свойство угла между прямой и плоскостью</span></a></span></b></p></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Вспомните,
что расстояние от точки до плоскости – это кратчайший из отрезков, соединяющий
исходную точку с точкой плоскости. Подобное верно и для угла: угол между прямой
и плоскостью – наименьший из углов между прямой и произвольной прямой в
плоскости.</span></p>

<div class=MsoNormal text-align=center style='margin-top:13.5pt;margin-right:0cm;
margin-bottom:13.5pt;margin-left:0cm;text-align:center;line-height:normal; width: 100%;'><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>

<hr size=0 width="100%" noshade style='color:#333333' text-align=center>

</span></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Доказательство</span></b></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Пусть
прямая&nbsp;<img width=21 height=22 id="Рисунок 79"
src="lecture01.files/image053.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316418/0e554b10_4546_0134_37f5_22000b0c602c.png">&nbsp;пересекает
плоскость&nbsp;<img width=10 height=22 id="Рисунок 78"
src="lecture01.files/image007.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316372/06e87eb0_4546_0134_37c7_22000b0c602c.png">&nbsp;в
точке&nbsp;<img width=10 height=22 id="Рисунок 77"
src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">,&nbsp;<img
 width=17 height=22 id="Рисунок 76" src="lecture01.files/image010.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316375/079cf9f0_4546_0134_37ca_22000b0c602c.png">&nbsp;–
проекция&nbsp;<img width=11 height=22 id="Рисунок 75"
src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316373/07157680_4546_0134_37c8_22000b0c602c.png">&nbsp;на
плоскость, а&nbsp;<img width=22 height=22 id="Рисунок 74"
src="lecture01.files/image054.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316419/0e7ae140_4546_0134_37f6_22000b0c602c.png">&nbsp;–
произвольная прямая в плоскости, проходящая через&nbsp;<img width=10
height=22 id="Рисунок 73" src="lecture01.files/image055.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316420/0ea14150_4546_0134_37f7_22000b0c602c.png">.
Пусть также&nbsp;<img width=22 height=22 id="Рисунок 72"
src="lecture01.files/image056.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316421/0ec716c0_4546_0134_37f8_22000b0c602c.png">&nbsp;–
перпендикуляр на прямую&nbsp;<img width=22 height=22 id="Рисунок 71"
src="lecture01.files/image054.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316419/0e7ae140_4546_0134_37f6_22000b0c602c.png">.
(См. Рис. 16.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=573 height=231 id="Рисунок 70" src="lecture01.files/image057.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316422/0eed8ac0_4546_0134_37f9_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
16. Иллюстрация к доказательству</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Тогда
несложно видеть, что&nbsp;<img  width=118 height=30 id="Рисунок 69"
src="lecture01.files/image058.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316423/0f12a660_4546_0134_37fa_22000b0c602c.png">&nbsp;а&nbsp;<img
 width=103 height=30 id="Рисунок 68" src="lecture01.files/image059.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316424/0f385510_4546_0134_37fb_22000b0c602c.png">.
Так как&nbsp;<img width=21 height=22 id="Рисунок 67"
src="lecture01.files/image060.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316425/0f72ab10_4546_0134_37fc_22000b0c602c.png">&nbsp;–
кратчайшее расстояние от точки&nbsp;<img width=11 height=22
id="Рисунок 66" src="lecture01.files/image008.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316373/07157680_4546_0134_37c8_22000b0c602c.png">&nbsp;до
плоскости, то&nbsp;<img width=158 height=22 id="Рисунок 65"
src="lecture01.files/image061.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316426/0f982420_4546_0134_37fd_22000b0c602c.png">,
а значит,&nbsp;<img width=112 height=22 id="Рисунок 64"
src="lecture01.files/image062.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316427/0fbd17d0_4546_0134_37fe_22000b0c602c.png">.</span></p>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;background:white'><b><span
style='font-size:18.0pt;font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/perpendikulyarnost-pryamyh-i-ploskostejb/ugol-mezhdu-pryamoy-i-ploskostyu?block=content#mediaplayer"
title="Смотреть в видеоуроке"><span style='color:#346BA2;font-weight:normal;
text-decoration:none'>Пример (пирамида)</span></a></span></b></p></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Найдите
угол между боковым ребром правильной четырехугольной пирамиды и ее основанием,
если все ее ребра равны&nbsp;<img width=9 height=22 id="Рисунок 63"
src="lecture01.files/image047.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316412/0d6415c0_4546_0134_37ef_22000b0c602c.png">.
(См. Рис. 17.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=308 height=278 id="Рисунок 62" src="lecture01.files/image063.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316428/0fe24960_4546_0134_37ff_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
17. Иллюстрация к примеру</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><i><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Решение</span></i></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Пусть&nbsp;<img
 width=11 height=22 id="Рисунок 61" src="lecture01.files/image064.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316429/10067200_4546_0134_3800_22000b0c602c.png">&nbsp;–
центр основания пирамиды&nbsp;<img width=50 height=22 id="Рисунок 60"
src="lecture01.files/image065.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316430/102bf9f0_4546_0134_3801_22000b0c602c.png">.
Как мы знаем, искомый угол – это угол между самой прямой и ее проекцией.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Чтобы
построить проекцию прямой на плоскость, достаточно взять две точки. Одной из
них будет точка пересечения прямой и плоскости – точка&nbsp;<img
width=10 height=22 id="Рисунок 59" src="lecture01.files/image005.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316370/06882b00_4546_0134_37c5_22000b0c602c.png">.
Второй – проекция точки&nbsp;<img width=9 height=22 id="Рисунок 58"
src="lecture01.files/image066.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316431/104fccc0_4546_0134_3802_22000b0c602c.png">&nbsp;–
точка&nbsp;<img width=11 height=22 id="Рисунок 57"
src="lecture01.files/image064.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316429/10067200_4546_0134_3800_22000b0c602c.png">,
т. к. вершина правильной пирамиды проектируется в центр основания. Тогда
искомый угол –&nbsp;<img width=40 height=22 id="Рисунок 56"
src="lecture01.files/image067.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316432/1075ebd0_4546_0134_3803_22000b0c602c.png">.
(См. Рис. 18.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=258 height=234 id="Рисунок 55" src="lecture01.files/image068.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316433/109b0240_4546_0134_3804_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
18. Искомый угол</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=56 height=34 id="Рисунок 54" src="lecture01.files/image069.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316434/10bfe640_4546_0134_3805_22000b0c602c.png"></span><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>&nbsp;(<img
 width=21 height=22 id="Рисунок 53" src="lecture01.files/image070.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316435/10f91f10_4546_0134_3806_22000b0c602c.png">&nbsp;–
половина диагонали квадрата&nbsp;<img  width=20 height=22
id="Рисунок 52" src="lecture01.files/image031.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316396/0aee06c0_4546_0134_37df_22000b0c602c.png">),&nbsp;<img
width=49 height=22 id="Рисунок 51" src="lecture01.files/image071.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316436/111e6dc0_4546_0134_3807_22000b0c602c.png">.
Значит,&nbsp;<img  width=90 height=34 id="Рисунок 50"
src="lecture01.files/image072.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316437/11446b40_4546_0134_3808_22000b0c602c.png">,
то есть искомый угол&nbsp;<img  width=55 height=22 id="Рисунок 49"
src="lecture01.files/image073.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316438/11691c30_4546_0134_3809_22000b0c602c.png">.</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Ответ:&nbsp;<img
 width=113 height=22 id="Рисунок 48" src="lecture01.files/image074.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316439/118e3f30_4546_0134_380a_22000b0c602c.png">.</span></p>

<div class=MsoNormal text-align=center style='margin-top:13.5pt;margin-right:0cm;
margin-bottom:13.5pt;margin-left:0cm;text-align:center;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>

<hr size=0 width="100%" noshade style='color:#333333' text-align=center>

</span></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Пример</span></b></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>В
правильной четырехугольной пирамиде&nbsp;<img width=50 height=22
id="Рисунок 47" src="lecture01.files/image065.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316430/102bf9f0_4546_0134_3801_22000b0c602c.png">&nbsp;все
ребра равны&nbsp;<img  width=9 height=22 id="Рисунок 46"
src="lecture01.files/image075.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316440/11b30790_4546_0134_380b_22000b0c602c.png">.
Найти угол между прямой&nbsp;<img  width=22 height=22 id="Рисунок 45"
src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316395/0abd35d0_4546_0134_37de_22000b0c602c.png">&nbsp;и
плоскостью&nbsp;<img  width=30 height=22 id="Рисунок 44"
src="lecture01.files/image076.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316441/11d66460_4546_0134_380c_22000b0c602c.png">.
(См. Рис. 19.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=311 height=273 id="Рисунок 43" src="lecture01.files/image077.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316442/11fddcd0_4546_0134_380d_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
19. Иллюстрация к условию задачи</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><i><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Решение</span></i></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Сперва
заметим, что, если параллельно перенести прямую&nbsp;<img width=22
height=22 id="Рисунок 42" src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316395/0abd35d0_4546_0134_37de_22000b0c602c.png">,
искомый угол не поменяется. Рассмотрим&nbsp;<img width=14 height=22
id="Рисунок 41" src="lecture01.files/image078.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316443/1221f080_4546_0134_380e_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=12 height=22 id="Рисунок 40" src="lecture01.files/image079.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316444/1247ca50_4546_0134_380f_22000b0c602c.png">&nbsp;–
середины&nbsp;<img  width=21 height=22 id="Рисунок 39"
src="lecture01.files/image053.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316418/0e554b10_4546_0134_37f5_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=21 height=22 id="Рисунок 38" src="lecture01.files/image080.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316445/12825ad0_4546_0134_3810_22000b0c602c.png">&nbsp;соответственно.
Тогда можно вместо&nbsp;<img width=22 height=22 id="Рисунок 37"
src="lecture01.files/image030.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316395/0abd35d0_4546_0134_37de_22000b0c602c.png">&nbsp;искать
угол между&nbsp;<img width=26 height=22 id="Рисунок 36"
src="lecture01.files/image081.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316446/12a7d8c0_4546_0134_3811_22000b0c602c.png">&nbsp;и
плоскостью. (См. Рис. 20.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
 width=284 height=259 id="Рисунок 35" src="lecture01.files/image082.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316447/12ce7f80_4546_0134_3812_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
20. Искомый угол – угол между&nbsp;<img  width=26 height=22
id="Рисунок 34" src="lecture01.files/image081.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316446/12a7d8c0_4546_0134_3811_22000b0c602c.png">&nbsp;и
плоскостью</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Далее,
заметим, что&nbsp;<img  width=12 height=22 id="Рисунок 33"
src="lecture01.files/image083.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316448/12f3a430_4546_0134_3813_22000b0c602c.png">&nbsp;–
проекция точки&nbsp;<img  width=14 height=22 id="Рисунок 32"
src="lecture01.files/image078.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316443/1221f080_4546_0134_380e_22000b0c602c.png">&nbsp;–
попадет на&nbsp;<img  width=21 height=22 id="Рисунок 31"
src="lecture01.files/image084.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316449/1318b160_4546_0134_3814_22000b0c602c.png">.
Действительно, по теореме о трех перпендикулярах, раз&nbsp;<img 
width=70 height=22 id="Рисунок 30" src="lecture01.files/image085.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316450/133fd420_4546_0134_3815_22000b0c602c.png">&nbsp;и&nbsp;<img
 width=61 height=22 id="Рисунок 29" src="lecture01.files/image086.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316451/1363b720_4546_0134_3816_22000b0c602c.png">,
то&nbsp;<img  width=20 height=22 id="Рисунок 28"
src="lecture01.files/image087.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316452/13878830_4546_0134_3817_22000b0c602c.png">&nbsp;есть
проекция&nbsp;<img  width=25 height=22 id="Рисунок 27"
src="lecture01.files/image088.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316453/13ae1b60_4546_0134_3818_22000b0c602c.png">.
А тогда искомый угол –&nbsp;<img  width=41 height=22 id="Рисунок 26"
src="lecture01.files/image089.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316454/13d590e0_4546_0134_3819_22000b0c602c.png">(См.
Рис. 21.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img
width=304 height=280 id="Рисунок 25" src="lecture01.files/image090.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316455/14152bc0_4546_0134_381a_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
21. Искомый угол –&nbsp;<img  width=34 height=22 id="Рисунок 24"
src="lecture01.files/image091.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316456/143b9ff0_4546_0134_381b_22000b0c602c.png"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Рассмотрим
треугольник&nbsp;<img  width=34 height=22 id="Рисунок 23"
src="lecture01.files/image092.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316457/146085f0_4546_0134_381c_22000b0c602c.png">.&nbsp;<img
 width=55 height=22 id="Рисунок 22" src="lecture01.files/image093.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316458/14843ca0_4546_0134_381d_22000b0c602c.png">,&nbsp;<img
width=108 height=24 id="Рисунок 21" src="lecture01.files/image094.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316459/14a90aa0_4546_0134_381e_22000b0c602c.png">.
Тогда если&nbsp;<img  width=11 height=22 id="Рисунок 20"
src="lecture01.files/image064.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316429/10067200_4546_0134_3800_22000b0c602c.png">&nbsp;–
середина&nbsp;<img width=26 height=22 id="Рисунок 19"
src="lecture01.files/image081.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316446/12a7d8c0_4546_0134_3811_22000b0c602c.png">,
то&nbsp;<img width=54 height=22 id="Рисунок 18"
src="lecture01.files/image095.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316460/14cdc660_4546_0134_381f_22000b0c602c.png">&nbsp;и
значит,&nbsp;<img width=99 height=31 id="Рисунок 17"
src="lecture01.files/image096.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316461/14f1d650_4546_0134_3820_22000b0c602c.png">.
(См. Рис. 22.)</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'><img width=196 height=207 id="Рисунок 16" src="lecture01.files/image097.jpg"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316462/1516a590_4546_0134_3821_22000b0c602c.jpg"></span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:10.0pt;font-family:"Helvetica",sans-serif;color:#333333'>Рис.
22. Выносной рисунок</span></p>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Ответ:&nbsp;<img
 width=61 height=31 id="Рисунок 15" src="lecture01.files/image098.png"
alt="https://static-interneturok.cdnvideo.ru/content/konspekt_image/316463/153b1a60_4546_0134_3822_22000b0c602c.png">.</span></p>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
<p class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;background:white'><b><span
style='font-size:18.0pt;font-family:"Helvetica",sans-serif;color:#333333'><a
href="https://interneturok.ru/lesson/geometry/10-klass/perpendikulyarnost-pryamyh-i-ploskostejb/ugol-mezhdu-pryamoy-i-ploskostyu?block=content#mediaplayer"
title="Смотреть в видеоуроке"><span style='color:#346BA2;font-weight:normal;
text-decoration:none'>Заключение</span></a></span></b></p></div>

<p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><span
style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>На
этом уроке мы познакомились с таким понятием, как угол между прямой и
плоскостью. Выяснили, что этот угол определяется как угол между прямой и ее
проекцией на эту плоскость. Также выяснили, что не стоит путать угол между
прямой и ее проекцией с углом между прямой и произвольной прямой данной
плоскости. Узнали, что угол между прямой и проекцией является наименьшим из
углов между прямой и произвольной прямой в плоскости. Решили несколько задач,
где наглядно продемонстрировали использование введенного определения.</span></p>

<div style="width: 600px; margin: 0 auto; /* Пример ширины и центрирования родительского блока */">
    <p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Список литературы</span></b></p>
    <div style="width: 100%;">
        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1. Атанасян Л.С. и др.&nbsp;Геометрия. Учебник для 10-11 классов. – 18-е изд. – М.: Просвещение, 2009. – 255 с.</span></p>
    </div>
    <div style="width: 100%;">
        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2. Погорелов А.В. Геометрия 10 класс. – 13-е изд. – М.: Просвещение, 2014.</span></p>
    </div>
    <div style="width: 100%;">
        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>3. Глазков Ю.А.,&nbsp;Юдина И.И.,&nbsp;Бутузов В.Ф. Рабочая тетрадь по геометрии 10 класс. – 7-е изд. – М.: Просвещение, 2013.</span></p>
    </div>
    <p class=MsoNormal style='margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white; width: 100%;'><b><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>Дополнительные рекомендованные ссылки на ресурсы сети Интернет</span></b></p>
    <div style="width: 100%;">
        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>1. Интернет-сайт resolventa.ru (<a href="http://www.resolventa.ru/uslugi/uslugischoolsvib.htm" target="_blank"><span style='color:#346BA2'>Источник</span></a>)</span></p>
    </div>
    <div style="width: 100%;">
        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>2. Интернет-сайт school.xvatit.com (<a href="http://school.xvatit.com/index.php?title=%D0%A3%D0%B3%D0%BE%D0%BB_%D0%BC%D0%B5%D0%B6%D0%B4%D1%83_%D0%BF%D1%80%D1%8F%D0%BC%D0%BE%D0%B9_%D0%B8_%D0%BF%D0%BB%D0%BE%D1%81%D0%BA%D0%BE%D1%81%D1%82%D1%8C%D1%8E" target="_blank"><span style='color:#346BA2'>Источник</span></a>)</span></p>
    </div>
    <div style="width: 100%;">
        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Helvetica",sans-serif;color:#333333'>3. Интернет-сайт 100ballov.kz (<a href="http://100ballov.kz/mod/page/view.php?id=798" target="_blank"><span style='color:#346BA2'>Источник</span></a>)</span></p>
    </div>
</div>

		</div> </div>
		<div text-align="center">
			<a style="align:center" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
			<a>|</a>
			<a style="align:center" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
		</div>				
	</div>	<!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/Geometry/includes/footer.php'; ?>
