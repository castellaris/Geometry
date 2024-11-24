<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>

<?php
ob_start();
if (!class_exists('Database')) {
    // Database class definition
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

// Start session
if (!isset($_SESSION)) {
    session_start();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_solution = "9/25";
    $user_solution = $_POST['solution'];
    if ($user_solution == $correct_solution) {
        $result_message = "Правильно";
    } else {
        $result_message = "Неправильно";
    }

    // Get user ID from session or database
    $user_id = $_SESSION['usersid']; // Change this to fetch user ID from session or database

    // Insert data into decision table
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO decision (dated, usersid, section, topic, solution, rating) VALUES (NOW(),  ?, '11 класс', 'Построение сечений конуса', ?)");
    $stmt->execute([$user_id, $user_solution]);
    Database::disconnect();

    // JavaScript для отображения сообщения через alert() и перенаправления
    echo '<script language="javascript">';
    echo 'if(!alert("Ваш ответ принят")) window.location.href="/Geometry/task/list.php"';
    echo '</script>';
}
?>

<div class="container" style="padding: 5px; display: inline-block; width: 100%;">
    <div style="width: 100%; text-align: center;">
        <a href="/Geometry/task/list.php"><h2>Задачи</h2></a>		
    </div>
    <div style="width: 100%; text-align: center;">
        <a href="" style="width: 100%;"><h3 style="margin: 0; width: 100%;">11 класс</h3></a>			
    </div>
    <main style="text-align: center; width: auto;">
        <section style="margin-bottom: 20px;">
        <div class="row justify-content-center" style="margin: 5px">
			<h4>Построение сечений конуса</h4>			
		</div>
        <section style="margin-top: 20px;">
            <div class="task" style="text-align: left;">
                <h2 style="text-align: center; background: white; color: #346BA2; font-family: Helvetica, sans-serif;">Задача: Построение сечений конуса</h2>
                <p style="text-align: left; background: white; color: #333333; font-size: 14px;">
                    <em>Дан конус \( K \) с радиусом основания \( r = 6 \, \text{см} \) и высотой \( h = 10 \, \text{см} \). Проведем два сечения через вершину конуса \( V \), параллельных основанию \( B \).</em>
                </p>
                <ol style="background: white; color: #333333; font-size: 14px; text-align:left;">
                    <li><em>Постройте сечение \( AB \), где \( A \) и \( B \) — точки на окружности основания конуса.</em></li>
                    <li><em>Постройте сечение \( CD \), где \( C \) и \( D \) — точки на боковой поверхности конуса.</em></li>
                    <li><em>Определите площадь каждого из сечений \( AB \) и \( CD \).</em></li>
                    <li><em>Найдите отношение площадей сечений \( AB \) и \( CD \).</em></li>
                </ol>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="justify-content: center;">
                    <label for="solution" style="justify-content: center;">Введите ваше решение:</label><br>
                    <textarea id="solution" name="solution" rows="4" cols="50"></textarea><br>
                </form>
            </div>
        </section>
    </main>
    <div style="text-align: center; margin-top: 20px;">
    <button type="submit" class="btn">Отправить решение</button>
        <a class="btn" style="width: 100px;" href="javascript:history.back();"><?php echo $Lang['back'];?></a>  
        <a class="btn" style="width: 100px;" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>  
    </div>  
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
