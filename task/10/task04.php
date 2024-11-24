<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
    $section = "10 класс";
    $topic = "Компланарные векторы";          
    if (!empty($_POST)) {       
        $message = null;
        $dated =  date("Y-m-d H:i:s");       
        $usersid = $_SESSION['usersid'];        
        $td1 = nl2br($_POST['td1']);
        $solution = $td1;
        $valid = true;
        if (empty($td1)) {
            $message = $message.$Lang['enter'].' '.$Lang['solution'].'<br>';
            $valid = false;
        }       
        if ($valid) {
            try {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO decision (dated, usersid, section, topic, solution) values(?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($dated, $usersid, $section, $topic, $solution));
                Database::disconnect();
                echo '<script language="javascript">';
                echo 'if(!alert("'.$Lang['your_answer_is_accepted'].'")) window.location.href="/Geometry/task/list.php"';
                echo '</script>';
            } catch (Exception $e) {
                $message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
            }
        }
    }
?>
<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
    <div class="container" style="width: auto; margin-left: auto; margin-right: auto;">
        <div class="row justify-content-center" style="width: 100%; margin: 0; text-align: justify;">
            <a href="/Geometry/task/list.php"><h2>Задачи</h2></a>            
        </div>
        <div class="row justify-content-center;" style="width: 100%;">
            <a href="" style="width: 100%;"><h3 style="margin: 0; justify-content: center; margin-right:auto; width:100%;"><?php echo $section;?></h3></a>                
        </div>
        <div class="row justify-content-center" style="margin: 5px">
            <h4><?php echo $topic;?></h4>            
        </div>
        <div class="task-description" style="max-width: 1020px; margin: 0 auto; padding: 20px; overflow: auto; width: 100%; border-radius: 0.5em;">
            <p class="MsoNormal" style="margin-top:15.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;background:white;">
                <span style="font-size:12pt;font-family:'Helvetica',sans-serif;color:#333333;"> 
                    1. В тетраэдре DABC M – точка пересечения медиан треугольника АВС. <br>Разложите вектор
                    <img style="max-width: 100%; height: auto;" src="task04.files/image001.png" alt="Vector 1"> 
                    по векторам 
                    <img style="max-width: 100%; height: auto;" src="task04.files/image002.png" alt="Vector 2">.
                </span>
                <br>
                <span style="font-size:12pt;font-family:'Helvetica',sans-serif;color:#333333;"> 
                    2. В параллелепипеде 
                    <img style="max-width: 100%; height: auto;" src="task04.files/image003.png" alt="Parallelepiped"> 
                    точка М принадлежит ребру AD, причем АМ:MD=1:3. <br>Точка Р принадлежит ребру DC.
                     <br>Разложите вектор 
                    <img style="max-width: 100%; height: auto;" src="task04.files/image005.png" alt="Vector 3"> 
                    по векторам 
                    <img style="max-width: 100%; height: auto;" src="task04.files/image006.png" alt="Vector 4">.
                </span>
                <br>
                <span style="font-size:12pt;font-family:'Helvetica',sans-serif;color:#333333;"> 
                    3. Используя векторы, докажите, что отрезки, соединяющие середины противоположных рёбер тетраэдра, пересекаются в одной точке и делятся ею пополам.
                </span>
            </p>
        </div>
        <form name="task" id="task" method="post">
            <div text-align="center">
                <h4>Решение</h4>    
                <textarea name="td1" id="td1" cols="80" rows="10"><?php if (!empty($td1)) echo htmlspecialchars($td1);?></textarea>
            </div>  
            <div text-align="center">
                <button type="submit" class="btn" style="width:100px">Принять</button>
                <a class="btn" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>    
                <a class="btn" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>    
            </div>              
        </form>
    </div>  <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
