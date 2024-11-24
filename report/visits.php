<?php
function deleteDataFromRow($row_id) {
    $pdo = Database::connect();
    $sql = "DELETE FROM visits WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($row_id));
    Database::disconnect();
}

if (isset($_POST['delete_btn'])) {
    $row_id = $_POST['delete_id'];
    deleteDataFromRow($row_id);
}

if (!empty($message)) {
    echo "<p class=\"error\">Сообщение: " . $message . "</p>";
}
?>
<div class="container">
    <div class="row">
        <h3 text-align="center"><?php echo $Lang['visits']; ?></h3>
    </div>
    <div class="row">
        <table id="myTable" class="display" style="width:100%; display: inline-block">
            <thead class="thead-dark">
                <tr>
                    <th><?php echo $Lang['date']; ?></th>
                    <th><?php echo $Lang['visitor_ip']; ?></th>
                    <th><?php echo $Lang['visitor_login']; ?></th>
                    <th><?php echo $Lang['visitor_uri']; ?></th>
                    <th><?php echo $Lang['count']; ?></th>
                    <th><?php echo $Lang['action']; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pdo = Database::connect();
                if (isset($_REQUEST['start']) && isset($_REQUEST['end'])) {
                    $start = $_REQUEST['start'];
                    $end = $_REQUEST['end'];
                    $sql = "SELECT id, datev, visitor_ip, visitor_login, visitor_uri, COUNT(*) AS count 
                            FROM visits 
                            WHERE datev BETWEEN :start AND DATE_ADD(:end, INTERVAL 1 DAY) 
                            GROUP BY visitor_ip, visitor_login, visitor_uri";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':start', $start, PDO::PARAM_STR);
                    $stmt->bindParam(':end', $end, PDO::PARAM_STR);
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . $row['datev'] . '</td>';
                        echo '<td>' . $row['visitor_ip'] . '</td>';
                        echo '<td>' . $row['visitor_login'] . '</td>';
                        echo '<td>' . $row['visitor_uri'] . '</td>';
                        echo '<td>' . $row['count'] . '</td>';
                        echo '<td><form method="POST"><input type="hidden" name="delete_id" value="' . $row['id'] . '"><button type="submit" name="delete_btn" class="btn btn-outline-danger">Удалить</button></form></td>';
                        echo '</tr>';
                    }
                } else {
                    echo "<tr><td colspan='6'>Не удалось получить данные. Параметры 'start' и/или 'end' не установлены.</td></tr>";
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
