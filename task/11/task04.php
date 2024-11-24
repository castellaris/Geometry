<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>

<?php
ob_start();
if (!class_exists('Database')) {
    class Database {
        private static $cont = null;

        public static function connect()
        {
            $host = 'den1.mysql1.gear.host';
            $db = 'geometry1';
            $user = 'geometry1';
            $pass = 'Ln0F6F~JvUJ_';
            $charset = 'utf8';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES    => false,
            ];

            if (null == self::$cont) {
                try {
                    self::$cont = new PDO($dsn, $user, $pass, $opt);
                } catch (PDOException $e) {
                    echo "Невозможно установить соединение с базой данных. " . $e->getMessage();
                }
            }
            return self::$cont;
        }

        public static function disconnect()
        {
            self::$cont = null;
        }
    }
}

if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_solution = "(1/3) * sqrt(3) * 6^2 * 8 + pi() * 4^2 * 10 + 12 * 8 * 2";
    $user_solution = $_POST['solution'];
    if ($user_solution == $correct_solution) {
        echo "<div style='color: green; text-align: center;' class='container'>Правильно</div>";
    } else {
        echo "<div style='color: red; text-align: center;' class='container'>Неправильно</div>";
    }

    $user_id = $_SESSION['usersid'];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO decision (dated, usersid, section, topic, solution) VALUES (NOW(),  ?, '11 класс', 'Сложные геометрические фигуры', ?)");
    $stmt->execute([$user_id, $user_solution]);
    Database::disconnect();

    echo '<script language="javascript">';
    echo 'if(!alert("Ваш ответ принят")) window.location.href="/Geometry/task/list.php"';
    echo '</script>';
}
?>

<div class="container" style="padding: 5px; display: inline-block; width:100%;">
    <div class="row justify-content-center" style="width: 100%; margin: 0; text-align: center;">
        <a href="/Geometry/task/list.php"><h2>Задачи</h2></a>         
    </div>
    <div class="row" style="width: 100%;">
    <a href="" style="width: 100%; display: inline-block;"><h3 style="margin: 0; text-align: center; margin-right: -20px;">11 класс</h3></a>                
</div>
    <main style="text-align: center; max-width: 800px; margin: 0 auto;">
        <section style="margin-bottom: 20px;">
        <div class="row justify-content-center" style="margin: 5px">
			<h4>Сложные геометрические фигуры</h4>			
		</div>
            <p style="margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white; text-align: left; font-family: 'Helvetica',sans-serif; color:#333333;">
                <em><span style="font-size:11.5pt; font-family:'Helvetica',sans-serif; color:#333333;">Сложные геометрические фигуры - это объекты, образованные из комбинаций базовых геометрических фигур, таких как многогранники и тела вращения. <br>Они представляют собой разнообразные формы и являются важными объектами изучения в математике и ее приложениях.</span></em>
            </p>
        </section>

        <section style="margin-top: 20px;">
            <div class="task" style="text-align: left;">
                <h2 style='margin-top:0cm; text-align:left; background:white; color:#346BA2; font-family: Helvetica , sans-serif;'>Задача: Объем сложного геометрического тела</h2>
                <p style='margin-top:0cm; text-align:left; background:white; color:#333333; width:auto;'><em>В парке аттракционов "Геометрия веселья" построили уникальную геометрическую горку под названием "Пирамида экстремальных кривых". Горка состоит из трех секций: верхней пирамидальной части, средней части в форме цилиндра и нижней платформы в форме параллелепипеда.</em></p>
                <p style='margin-top:0cm; text-align:left; background:white; color:#333333; width:auto;'><em>Известно, что: Верхняя пирамида имеет высоту 8 метров и основание в форме правильного треугольника со стороной 6 метров. Средняя часть представляет собой цилиндр с высотой 10 метров и радиусом основания 4 метра. Нижняя платформа - параллелепипед с размерами 12 метров в длину, 8 метров в ширину и 2 метра в высоту.</em></p>
                <p style='margin-top:0cm; text-align:left; background:white; color:#333333; width:auto;'><em>Найдите общий объем "Пирамиды экстремальных кривых".</em></p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="solution">Введите ваше решение:</label><br>
                    <textarea id="solution" name="solution" rows="4" cols="50"></textarea><br>
                </form>
            </div>
        </section>
    </main>
    <div style="text-align: center; margin-top: 20px;">
        <button type="submit" class="btn">Отправить решение</button>
        <a class="btn" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>  
        <a class="btn" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>  
    </div>  
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
</body>
</html>
