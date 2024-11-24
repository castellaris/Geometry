<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; 
?>
<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
	<link rel="stylesheet" href="css/style.css">
    <div class="container" style="padding: 5px;">
        <div class="row justify-content-md-center" style="padding:20px;">
            <h1 class="display-4" text-align="center"><?php echo $Lang['lectures'];?></h1>
        </div>
        <div class="row justify-content-md-center" >
            <div id="accordion" style="width:100%;padding:10px;">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        10 класс
                        </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" >                            
                            <ol>
                                <li><a href="/Geometry/lecture/10/01/index.php">Аксиомы стереометрии и их следствия</a></li>
                                <li><a href="/Geometry/lecture/10/02/index.php">Параллельность прямых и плоскостей</a></li>
                                <li><a href="/Geometry/lecture/10/03/index.php">Перпендикулярность прямых и плоскостей</a></li>
                                <li><a href="/Geometry/lecture/10/04/index.php">Векторы в пространстве</a></li>
                                <li><a href="/Geometry/lecture/10/05/index.php">Окружность</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            11 класс
                        </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <ol>
                                <li><a href="/Geometry/lecture/11/01/index.php">Метод координат в пространстве</a></li>
                                <li><a href="/Geometry/lecture/11/02/index.php">Тела вращения</a></li>
                                <li><a href="/Geometry/lecture/11/03/index.php">Объёмы тел</a></li>
                                <li><a href="/Geometry/lecture/11/04/index.php">Сложные геометрические тела</a></li>
                                <li><a href="/Geometry/lecture/11/05/index.php">Построение сечений</a></li>

                            </ol>                            
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php';?> 
