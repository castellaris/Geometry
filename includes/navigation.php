<?php include __DIR__ . '/connection.php'; ?>
<?php
if (!isset($_SESSION)) {
    session_start();    
}

$admin = 0;
$manager = 0;

if (isset($_SESSION["session_login"])) {
    $user = $_SESSION["session_login"];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users where login=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($user));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $admin = $row['admin'];
    $manager = $row['manager'];
    Database::disconnect();
}

if (!empty($_GET['lang'])) {
    $LangArray = array("ru", "kz", "en");
    $DefaultLang = "ru";

    if (@$_SESSION['NowLang']) {
        if (!in_array($_SESSION['NowLang'], $LangArray)) {
            $_SESSION['NowLang'] = $DefaultLang;
        }
    } else {
        $_SESSION['NowLang'] = $DefaultLang;
    }

    $language = addslashes($_GET['lang']);

    if ($language) {
        if (!in_array($language, $LangArray)) {
            $_SESSION['NowLang'] = $DefaultLang;
        } else {
            $_SESSION['NowLang'] = $language;
        }
    }
}

if (!isset($_SESSION['NowLang'])) {
    $_SESSION['NowLang'] = 'ru';
}

include("lang." . $_SESSION['NowLang'] . ".php");
?>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%;">
        <a class="navbar-brand" href="/Geometry/index.php" title="<?php echo $Lang['to_main'];?>" style="width: 80px;">
            <img src="/Geometry/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 5%;">
            <ul class="navbar-nav mr-auto" style="margin-right: 170px;">
            <li class="nav-item">
                <a class="nav-link" href="/Geometry/index.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['main'];?></a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Geometry/lecture/index.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['lectures'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Geometry/manual/list.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['manuals'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Geometry/links.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['links'];?></a>
                </li>
                <?php
                if (!isset($_SESSION["session_login"])) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Geometry/contact.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['contacts'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Geometry/login.php"><?php echo $Lang['entrance'];?></a>
                </li>
                <?php
                } else {
                    if (($manager != 1) && ($admin != 1)) {
                ?>
                <li class="nav-item" style="margin-left: 285px;">
                    <a class="nav-link" href="/Geometry/task/list.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['decisions'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Geometry/test/select.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['tests'];?></a>
                </li>
                <?php
                    }
                    if ($manager == 1) {
                ?>
                <li class="nav-item dropdown" style="margin-left: 420px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php echo $Lang['manager2']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Geometry/manual/index.php" style="margin-right: 10px;"><?php echo $Lang['manuals']; ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Geometry/question/index.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['questions']; ?></a>
                        <a class="dropdown-item" href="/Geometry/test/index.php" style="margin-right: 10px; height: auto"><?php echo $Lang['tests']; ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Geometry/decision/index.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['decisions']; ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Geometry/report/index.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['reports']; ?></a>
                    </div>
                </li>
                <?php
                    }
                    if ($admin == 1) {
                ?>
                <li class="nav-item dropdown" style="margin-left: 420px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php echo $Lang['admin2']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="/Geometry/users/index.php"><?php echo $Lang['users'];?></a>
                    </div>
                </li>
                <?php
                    }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php echo $Lang['welcome'];?>, <span><?php echo $_SESSION['session_login'];?>! </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Geometry/cabinet.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['personal_area'];?></a>
                        <a class="dropdown-item" href="/Geometry/my_decisions/" style="margin-right: 10px; height: auto;"><?php echo $Lang['my_decisions'];?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Geometry/logout.php" style="margin-right: 10px; height: auto;"><?php echo $Lang['exit'];?></a>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>
