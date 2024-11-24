<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>

<?php
$section = "11 класс";
$topic = "Понятие конуса";
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
            $message = "Ошибка: ".$sql." ".utf8_encode($e->getMessage());
        }
    }
}
?>

<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>
    <div class="container" style="padding: 5px">
        <div class="row justify-content-center">
            <a href="/Geometry/task/list.php"><h2>Задачи</h2></a>
        </div>
        <div class="row justify-content-center">
            <a href=""><h3><?php echo $section;?></h3></a>
        </div>
        <div class="row justify-content-center" style="margin: 5px">
            <h4><?php echo $topic;?></h4>
        </div>
        <div style="margin-top:25px; width:100%;" class="task-condition">
    <p class="MsoNormal task-description" style="overflow: hidden;">1. Дайте определение конуса.</p>
    <p class="MsoNormal task-description" style="overflow: hidden;">2. Дополните утверждение: «Осевым сечением конуса является…»</p>
    <p class="MsoNormal task-description" style="overflow: hidden;">3. Изобразите конус, на его боковой поверхности обозначьте точки <img style="max-width: 100%;" width="10" height="22" src="task02.files/image001.png" alt="">, <img style="max-width: 100%;" width="11" height="22" src="task02.files/image002.png" alt=""> и <img style="max-width: 100%;" width="10" height="22" src="task02.files/image003.png" alt="">. Постройте прямую пересечения плоскости <img style="max-width: 100%;" width="34" height="22" src="task02.files/image004.png" alt=""> с плоскостью основания конуса.</p>
</div>


        <form name="task" id="task" method="post">
            <div style="text-align: center;">
                <h4>Решение</h4>
                <textarea name="td1" id="td1" cols="80" rows="10"><?php if (!empty($td1)) echo htmlspecialchars($td1);?></textarea>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn" style="width:100px">Принять</button>
                <a class="btn" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>
                <a class="btn" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>
            </div>
        </form>
    </div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
