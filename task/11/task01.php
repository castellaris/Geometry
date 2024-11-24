<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>

<?php
$section = "11 класс";
$topic = "Прямоугольная система координат в пространстве. Координаты вектора";            
if (!empty($_POST)) {
    $message = null;
    $dated =  date("Y-m-d H:i:s");
    $usersid = $_SESSION['usersid'];
    $td1 = nl2br($_POST['td1']);
    $solution = $td1;
    $valid = true;
    if (empty($td1)) {
        $message = $message . $Lang['enter'] . ' ' . $Lang['solution'] . '<br>';
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
            $message = "Ошибка: " . $sql . " " . utf8_encode($e->getMessage());
        }
    }
}
?>

<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
    <div class="container" style="padding: 5px; overflow: auto; max-width: 70%;">
        <div class="row justify-content-center">
            <a href="/Geometry/task/list.php"><h2>Задачи</h2></a>
        </div>
        <div class="row justify-content-center">
            <a href=""><h3><?php echo $section;?></h3></a>
        </div>
        <div class="row justify-content-center" style="margin: 5px">
            <h4><?php echo $topic;?></h4>
        </div>
        <div class="task-condition" style="overflow: hidden; text-align:left; width:100%;">
    <p class="task-description" style="overflow: auto;">
        <span>1. На каких расстояниях от координатных плоскостей находится точка</span>
        <img style="max-width: 100%;" width="76" height="22" src="task01.files/image001.png" alt="?">
    </p>
    <p class="task-description" style="overflow: auto;">
        <span>2. Определите, лежит ли данная точка на координатной оси. Если да, то укажите эту ось</span>
        <img style="max-width: 100%;" width="65" height="22" src="task01.files/image002.png" alt="">,
        <img style="max-width: 100%;" width="65" height="22" src="task01.files/image003.png" alt="">,
        <img style="max-width: 100%;" width="64" height="22" src="task01.files/image004.png" alt="">,
        <img style="max-width: 100%;" width="62" height="22" src="task01.files/image005.png" alt="">,
        <img style="max-width: 100%;" width="65" height="22" src="task01.files/image006.png" alt="">.
    </p>
    <p class="task-description" style="overflow: auto;">
        <span>3. Определите, принадлежит ли данная точка координатной плоскости. Если да, то назовите ее</span>
        <img style="max-width: 100%;" width="76" height="22" src="task01.files/image007.png" alt="">,
        <img style="max-width: 100%;" width="76" height="22" src="task01.files/image008.png" alt="">,
        <img style="max-width: 100%;" width="76" height="22" src="task01.files/image009.png" alt="">,
        <img style="max-width: 100%;" width="76" height="22" src="task01.files/image010.png" alt="">,
        <img style="max-width: 100%;" width="86" height="22" src="task01.files/image011.png" alt="">.
    </p>
</div>


        <form name="task" id="task" method="post">
            <div text-align="center">
                <h4>Решение</h4>
                <textarea name="td1" id="td1" cols="80" rows="10"><?php if (!empty($td1)) echo htmlspecialchars($td1);?></textarea>
            </div>
            <div text-align="center">
                <button type="submit" class="btn" style="width:100px; height: auto;">Принять</button>
                <a style="width:100px" class="btn" href="javascript:history.back();"><?php echo $Lang['back'];?></a>
                <a style="width:100px" class="btn" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>
            </div>
        </form>
    </div>
    <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
