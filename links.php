<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/navigation.php"; ?>
<head>
    <title><?php echo $label_contact; ?></title>
</head>
<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
    <div class="container" style="display: inline-block; justify-content: center; align-items: center; width: 100%">
        <div class="container-fluid" style="padding: 5px" >
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#links"><?php echo $Lang['links'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#textbook"><?php echo $Lang['textbook'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#video"><?php echo $Lang['video_lesson'];?></a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="links" class="container tab-pane active">
                    <h3><?php echo $Lang['links'];?></h3>
                    <p style="margin-bottom: 10px;">mekteb.kz/be20<br/><a href="https://mektep.kz/be20" target="_blank" rel="noopener">https://mektep.kz/be20</a></p>
                    <p style="margin-bottom: 10px;">ЕНТ по математике 2017-2021<br/><a href="https://buki.kz/materials/matematika/" target="_blank" rel="noopener">https://buki.kz/materials/matematika/</a></p>
                    <p style="margin-bottom: 10px;">Математика для заочников<br/><a href="http://mathprofi.ru/" target="_blank" rel="noopener">http://mathprofi.ru/</a></p>
                    <p style="margin-bottom: 10px;">math.reshuent.kz<br/><a href="https://math.reshuent.kz/" target="_blank" rel="noopener">https://math.reshuent.kz/</a></p>
                    <p style="margin-bottom: 10px;">ymnik.kz<br/><a href="https://ymnik.kz/tests/maths/" target="_blank" rel="noopener">https://ymnik.kz/tests/maths/</a></p>
                </div>
                <div id="textbook" class="container tab-pane">
                    <h3><?php echo $Lang['textbook'];?></h3>
                    <h4>10 класс</h4>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/492/492.pdf" target="_blank" rel="noopener">Геометрия. ЕМ. Смирнов В. учебник для 10 класса (Казахский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/493/493.pdf" target="_blank" rel="noopener">Геометрия. ЕМ. Шыныбеков А. учебник для 10 класса (Казахский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/519/519.pdf" target="_blank" rel="noopener">Геометрия. ЕМ. Смирнов В. учебник для 10 класса (Русский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/516/516.pdf" target="_blank" rel="noopener">Геометрия. ЕМ. Шыныбеков А. учебник для 10 класса (Русский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/551/551.pdf" target="_blank" rel="noopener">Геометрия. ОГ. Смирнов В. учебник для 10 класса (Казахский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/573/573.pdf" target="_blank" rel="noopener">Геометрия. ОГ. Смирнов В. учебник для 10 класса (Русский)</a></p>
                    <h4>11 класс</h4>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/665/665.pdf" target="_blank" rel="noopener">Геометрия. ОГ. Смирнов В.А. учебник для 11 класса (Казахский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/666/666.pdf" target="_blank" rel="noopener">Геометрия. ЕМ. Смирнов В.А. учебник для 11 класса (Казахский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/687/687.pdf" target="_blank" rel="noopener">Геометрия. ОГ. Смирнов В.А. учебник для 11 класса (Русский)</a></p>
                    <p style="margin-bottom: 10px;"><a href="https://www.okulyk.kz/wp-content/books/688/688.pdf" target="_blank" rel="noopener">Геометрия. ЕМ. Смирнов В.А. учебник для 11 класса (Русский)</a></p>
                </div>
                <div id="video" class="container tab-pane">
                    <h3>Видеоуроки</h3>
                    <div class="video-links">
                        <p style="margin-bottom: 10px;"><a href="https://www.youtube.com/watch?v=51Wl594E78o" target="_blank" rel="noopener">Аксиомы стереометрии</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://www.youtube.com/watch?v=o-J8QOtbI2k&pp=ygV70YLQtdC70LXRg9GA0L7QutC4INC10Lsg0LDRgNC90LAg0L_QviDQs9C10L7QvNC10YLRgNC40LgsINC_0LDRgNCw0LvQu9C10LvRjNC90L7RgdGC0Ywg0L_RgNGP0LzRi9GFINC4INC_0LvQvtGB0LrQvtGB0YLQtdC5" target="_blank" rel="noopener">Параллельность прямых и плоскостей</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://youtu.be/HZRS-5FjMs8?si=cuT_-8K3drtU4TCn" target="_blank" rel="noopener">Признак перпендикулярности прямой и плоскости</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://www.youtube.com/watch?v=oby39_AX8bM" target="_blank" rel="noopener">Понятие вектора</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://youtu.be/U93iWAENzRY?si=OJA-itKqnzEkqRol" target="_blank" rel="noopener">Прямоугольная система координат в пространстве</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://www.youtube.com/watch?v=Lc0T0a2TGmM" target="_blank" rel="noopener">Понятие цилиндра</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://youtu.be/blBBvCzCPss?si=32zMO_F4LVGkbpNE" target="_blank" rel="noopener">Объем шара</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://www.youtube.com/watch?v=yKK8jmGQ8Ks" target="_blank" rel="noopener">Сложные геометрические фигуры</a></p>
                        <p style="margin-bottom: 10px;"><a href="https://www.youtube.com/watch?v=mxqJitaubk4&list=PLtgE87VTmyY-Er-t-PwxWwxJimKZyOUDe" target="_blank" rel="noopener">Пересечение прямых</a></p> 
						<p style="margin-bottom: 10px;"><a href="https://youtu.be/-WXvE79R1PE?si=2NNyQLjbJ9FvanBL" target="_blank" rel="noopener">Построение сечений</a></p>
                    </div>
                </div>
            </div>      
        </div>      
    </div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/footer.php"; ?>
