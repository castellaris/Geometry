<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; 
?> 

<div class="container" style="padding: 5px">
    <div class="row justify-content-center">
        <a href="/Geometry/lecture/index.php"><h2>Лекции</h2></a>			
    </div>
    <div class="row justify-content-center" style="width: 100%;">
        <a href="/Geometry/lecture/10/01/index.php"><h3>11 класс. Построение сечений. Методы секущих плоскостей и срезания.</h3></a>				
    </div>
    <div class="row justify-content-center" style="margin: 5px">
        <h4>Построение сечений</h4>			
    </div>
    <div class="row justify-content-center" style="margin: 5px">
        <h4>Тема: Сечения</h4>			
    </div>
    <div class="text-right">
        <input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Поиск" autofocus> 			
        <button class="btn btn-outline-danger"><img src="/Geometry/images/stop.png" alt="Отменить" title="Отменить поиск" onclick="javascript: FindOnPage('text-to-find',false); return false;" style="vertical-align: middle"></button>
        <button class="btn btn-outline-info"><img src="/Geometry/images/search.png" alt="Поиск" title="Начать поиск" onclick="javascript: FindOnPage('text-to-find',true); return false;" style="vertical-align: middle"></button>
    </div>

    <header>
        <h1 style="text-align: center; color:#346BA2; background-color:white" class=MsoNormal text-align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:19.5pt;'>Лекция по геометрии: Построение сечений</h1>
    </header>
    <main>
        <section style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
            <h2 style="margin-top:0cm; margin-bottom:0cm; background:white;">
                <span style="font-family:'Helvetica',sans-serif; color:#333333;">
                    <a href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer" title="Смотреть в видеоуроке">
                        <b><span style="color:#346BA2; text-decoration:none">Введение в построение сечений</span></b>
                    </a>
                </span>
            </h2>
            <p style="margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white;  width:auto;">
                <em><span style="font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333">Построение сечений – это процесс получения поверхности, которая возникает в результате пересечения какого-либо тела и плоскости. В данной лекции мы рассмотрим основные методы построения сечений многогранников и тел вращения, а также применение метода следов и использование вспомогательных плоскостей.</span></em>
            </p>
        </section>
        <section style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
            <h2 style="margin-top:0cm; margin-bottom:0cm; background:white;">
                <span style="font-family:'Helvetica',sans-serif; color:#333333;">
                    <a href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer" title="Смотреть в видеоуроке">
                        <b><span style="color:#346BA2; text-decoration:none">Алгоритмы построения сечений многогранников и тел вращения</span></b>
                    </a>
                </span>
            </h2>
            <p style="margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white; width:auto;">
                <em><span style="font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333">Существует несколько основных алгоритмов построения сечений:</span></em>
            </p>
            <ul style="margin-top: 0px; margin-bottom: 0px; font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333; background-color: white;  width:auto;">
                <li>Метод секущих плоскостей:
                    <ul>
                        <li>Пусть у нас есть многогранник (или тело вращения) с вершинами \( P_1, P_2, ..., P_n \). Метод секущих плоскостей заключается в том, чтобы выбирать плоскости таким образом, чтобы они пересекали многогранник (или тело) и создавали новые грани. Плоскость задается уравнением \( Ax + By + Cz + D = 0 \), где \( (A, B, C) \) - нормаль к плоскости, \( (x, y, z) \) - точка на плоскости, \( D \) - свободный член. Для построения новых граней необходимо найти точки пересечения плоскости с рёбрами многогранника (или сечением тела вращения). Далее, по этим точкам строятся новые грани.</li>
                        <img src="data:image/png;base64,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" alt="">
                    </ul>
                </li>
                <li>Метод срезания:
                    <ul>
                        <li>Для многогранников: в данном методе мы проецируем многогранник на плоскость, перпендикулярную какой-либо из осей координат (например, плоскость \( XY \), \( XZ \), или \( YZ \)). Затем мы проводим срез многогранника этой плоскостью.</li>
                        <li>Для тел вращения: проецируем тело на плоскость, перпендикулярную оси вращения. Затем проводим срез тела этой плоскостью. Рассматриваемая плоскость задается уравнением \( x = a \) (для среза по \( YZ \)), \( y = b \) (для среза по \( XZ \)), или \( z = c \) (для среза по \( XY \)). Полученные в результате среза фигуры могут быть использованы для дальнейшего анализа или отображения.</li>
                        <img src="https://cadinstructor.org/wp-content/uploads/2014/07/1858645_orig.png" alt="">
                    </ul>
                </li>
            </ul>
            <p style="margin-top:0cm; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white; width:auto;">
                <em><span style="font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333">Эти методы позволяют эффективно получать сечения различных геометрических тел.</span></em>
            </p>
        </section>
        <section style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
            <h2 style="margin-top:0cm; margin-bottom:0cm; background:white;">
                <span style="font-family:'Helvetica',sans-serif; color:#333333;">
                    <a href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer" title="Смотреть в видеоуроке">
                        <b><span style="color:#346BA2; text-decoration:none">Применение метода следов</span></b>
                    </a>
                </span>
            </h2>
            <p style="margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white;  width:auto;">
                <em><span style="font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333">Метод следов используется для построения сечений без проведения плоскостей через тело. Он основан на анализе координат точек, оставляемых следом при движении по поверхности тела. Вот текст, объединяющий формулы метода следов:

След матрицы (Trace):
tr(A) = ∑︀ a_{ii} , где a_{ii} - диагональные элементы матрицы A, а n - размерность матрицы.

Следовые элементы (Trace Elements):
Следовые элементы обычно выражаются через определители главных миноров матрицы A и могут быть определены с использованием формул следующего вида:

α_k = (-1)^k * det(A_k), где α_k - следовый элемент порядка k, A_k - главный минор порядка k матрицы A.

Применение формулы для решения задачи:
После вычисления следа матрицы и следовых элементов вы можете использовать их в соответствии с конкретной задачей. Например, для решения системы линейных уравнений или нахождения собственных значений и векторов.

Это основные формулы метода следов. Однако, при более сложных задачах могут потребоваться более специфические формулы или дополнительные шаги.</span></em>
<img src="https://umschool.net/library/wp-content/uploads/2022/04/15-5-1024x695.png" alt="">
            </p>
        </section>
        <section style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
            <h2 style="margin-top:0cm; margin-bottom:0cm; background:white;">
                <span style="font-family:'Helvetica',sans-serif; color:#333333;">
                    <a href="https://interneturok.ru/lesson/geometry/10-klass/vektory-v-prostranstve/komplanarnye-vektory?block=content#mediaplayer" title="Смотреть в видеоуроке">
                        <b><span style="color:#346BA2; text-decoration:none">Использование вспомогательных плоскостей</span></b>
                    </a>
                </span>
            </h2>
            <p style="margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white;  width:auto;">
                <em><span style="font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333">Вспомогательные плоскости играют важную роль в процессе построения сечений. Они помогают определить положение сечения относительно тела и облегчают анализ полученных результатов. Конечно, вот текст без разбивки на пункты:

Формулы для работы с вспомогательными плоскостями зависят от конкретной ситуации и используемых методов. Основное уравнение плоскости в трехмерном пространстве имеет вид Ax + By + Cz + D = 0, где A, B, C и D - коэффициенты, определяющие положение и ориентацию плоскости. Нормальный вектор к плоскости задается как (A, B, C).

Расстояние d от точки (x₀, y₀, z₀) до плоскости Ax + By + Cz + D = 0 вычисляется по формуле d = |Ax₀ + By₀ + Cz₀ + D| / √(A² + B² + C²).

Пересечение двух плоскостей может быть найдено решением системы уравнений этих плоскостей.

Плоскости параллельны, если их нормальные векторы пропорциональны. Для перпендикулярных плоскостей скалярное произведение их нормальных векторов равно нулю.

Это лишь некоторые основные формулы, используемые при работе с вспомогательными плоскостями в трехмерном пространстве. В конкретных задачах могут использоваться и другие формулы и методы, в зависимости от требуемой функциональности и условий задачи.</span></em>
<img src="data:image/png;base64,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" alt="">
            </p>
        </section>
    </main>
    <div text-align="center" class="justify-content-center">
        <a style="align:center" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
        <a>|</a>
        <a style="align:center" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
    </div>				
</div>	<!-- /container -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
</body>
</html>
