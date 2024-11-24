<?php
function deleteDataFromRow($row_id) {
    $pdo = Database::connect();
    $sql = "DELETE FROM decisions WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($row_id));
    Database::disconnect();
}

if (isset($_POST['delete_btn'])) {
    $row_id = $_POST['delete_id'];
    deleteDataFromRow($row_id);
}

if (isset($_POST['delete_all_btn'])) {
    $pdo = Database::connect();
    $sql = "DELETE FROM decisions";
    $q = $pdo->prepare($sql);
    $q->execute();
    Database::disconnect();
}

if (!empty($message)) {
    echo "<p class=\"error\">Сообщение: " . $message . "</p>";
}
?>
<div class="container">
    <div class="row">
        <h3 style="text-align: center;"><?php echo $Lang['decisions']; ?></h3>
    </div>
    <div class="row">
        <table id="myTable" class="display" style="width:100%; display: inline-block;">
            <thead class="thead-dark">
                <tr>
                    <th><?php echo $Lang['dated']; ?></th>
                    <th><?php echo $Lang['login']; ?></th>
                    <th><?php echo $Lang['topic']; ?></th>
                    <th><?php echo $Lang['title']; ?></th>
                    <th><?php echo $Lang['answer']; ?></th>
                    <th><?php echo $Lang['rating']; ?></th>
                    <th><?php echo $Lang['action']; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pdo = Database::connect();
                if (isset($_REQUEST['start']) && isset($_REQUEST['end'])) {
                    $start = $_REQUEST['start'];
                    $end = $_REQUEST['end'];
                    $sql = "SELECT id, dated, usersid, section, topic, solution, rating 
                            FROM view_decision 
                            WHERE dated BETWEEN :start AND DATE_ADD(:end, INTERVAL 1 DAY)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':start', $start, PDO::PARAM_STR);
                    $stmt->bindParam(':end', $end, PDO::PARAM_STR);
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . $row['dated'] . '</td>';
                        echo '<td>' . $row['usersid'] . '</td>';
                        echo '<td>' . $row['section'] . '</td>';
                        echo '<td>' . $row['topic'] . '</td>';
                        echo '<td>' . $row['solution'] . '</td>';
                        echo '<td>' . $row['rating'] . '</td>';
                        echo '<td><form method="POST"><input type="hidden" name="delete_id" value="' . $row['id'] . '"><button type="submit" name="delete_btn" class="btn btn-outline-danger">Удалить</button></form></td>';
                        echo '</tr>';
                    }
                } else {
                    echo "<tr><td colspan='7'>Не удалось получить данные. Параметры 'start' и/или 'end' не установлены.</td></tr>";
                }
                Database::disconnect();
                ?>
            </tbody>
        </table>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12" style="text-align: center;">
            <form method="POST">
                <button type="submit" name="delete_all_btn" class="btn btn-danger">Удалить все данные</button>
            </form>
        </div>
    </div>
</div>
