<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
ob_start();
if (!class_exists('Database')) {
    // Database class definition
    class Database
    {
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
    $correct_solution = "x^2 + y^2 = 4";
    $user_solution = $_POST['solution'];
    if ($user_solution == $correct_solution) {
        $result_message = "Правильно!";
    } else {
        $result_message = "Неправильно.";
    }

    // Get user ID from session or database
    $user_id = $_SESSION['usersid']; // Change this to fetch user ID from session or database

    // Insert data into decision table
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO decision (dated, usersid, section, topic, solution, rating) VALUES (NOW(),  ?, '10 класс', 'Уравнение окружности', ?)");
    $stmt->execute([$user_id, $user_solution]);
    Database::disconnect();

    // JavaScript для отображения сообщения через alert() и перенаправления
    echo '<script language="javascript">';
    echo 'if(!alert("Ваш ответ принят")) window.location.href="/Geometry/task/list.php"';
    echo '</script>';
}
?>


<div class="container" style="padding: 5px, display-inline-block">
<div class="row justify-content-center" style="width: 100%; margin: 0; text-align: justify;">
			<a href="/Geometry/task/list.php"><h2>Задачи</h2></a>			
		</div>
		<div class="row justify-content-center;" style="width: 100%;">
			<a href="" style="width: 100%;"><h3 style="margin: 0; justify-content: enter; margin-right: 0; width:100%;">10 класс</h3></a>				
		</div>
        <div class="row justify-content-center" style="margin: 5px">
			<h4>Окружность. Уравнение окружности</h4>			
		</div>
            <p style='margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white; text-align: left; max-width:auto; margin:auto;' class="justify-content-center">
                <em><span style='font-size:11.5pt; font-family:"Helvetica",sans-serif; color:#333333 '>Окружность - это множество всех точек, равноудаленных от фиксированной точки, называемой центром. Уравнение окружности имеет вид: \( x^2 + y^2 = r^2 \), где \( (h, k) \) - координаты центра, а \( r \) - радиус окружности.</span></em>
            </p>
            <p style='margin-top:15.0pt; margin-right:0cm; margin-bottom:0cm; margin-left:0cm; margin-bottom:.0001pt; background:white; text-align: center; width:auto;' class="justify-content-center">
                <em><span style='font-size:11.5pt; font-family:"Helvetica",sans-serif; color:#333333 '>Найдите уравнение окружности с центром в точке \((0, 0)\).</span></em>
            </p>
        </section>
        <section style="margin-top: 20px;">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="solution">Введите решение:</label><br>
                <input type="text" id="solution" name="solution" required><br>
                <button type="submit" class="btn">Проверить</button>
            </form>
            <?php
            if (isset($result_message)) {
                echo $result_message;
            }
            ?>
        </section>
    </main>
   <div text-align="center">
        <a class="btn" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>    
        <a class="btn" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>    
    </div>          
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
</body>
</html>
