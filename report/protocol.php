<?php
function deleteData($id) {
    $pdo = Database::connect();
    $sql = "DELETE FROM protocol WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
}

function deleteDataFromRow($row_id) {
    $pdo = Database::connect();
    $sql = "DELETE FROM view_protocol WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($row_id));
    Database::disconnect();
}

if (isset($_POST['delete_id'])) {
    $id_to_delete = $_POST['delete_id'];
    deleteData($id_to_delete);
}

if (isset($_POST['delete_all_btn'])) {
    $pdo = Database::connect();
    $sql = "DELETE FROM protocol";
    $q = $pdo->prepare($sql);
    $q->execute();
    Database::disconnect();
}

echo '<div class="container">';
echo '<div class="row">';
echo '<h3>Тестовые задания</h3>'; // Добавляем заголовок
echo '</div>';
echo '<table id="myTable" class="display" style="width:100%; display: inline-block"">';
echo '<thead class="thead-dark">';
echo '<tr>';
echo '<th>'.$Lang['datep'].'</th>';
echo '<th>'.$Lang['name'].'</th>';
echo '<th>'.$Lang['title'].'</th>';
echo '<th>'.$Lang['rate'].'</th>';
echo '<th>'.$Lang['result'].'</th>';
echo '<th>Действия</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$pdo = Database::connect();
$sql = "SELECT * FROM view_protocol";
$sql = $sql." WHERE datep>='".$_REQUEST['start']."' AND datep<=DATE_ADD('".$_REQUEST['end']."',INTERVAL 1 DAY) ";
$sql = $sql." ORDER BY datep";

foreach ($pdo->query($sql) as $row) {
    echo '<tr>';
    echo '<td>'.date("d.m.Y H:i", strtotime($row['datep'])).'</td>';
    echo '<td>'. $row['name'] . '</td>';
    echo '<td>'. $row['title'] . '</td>';
    echo '<td>'. $row['rate'] . '</td>';
    echo '<td>'. $row['result'] . '</td>';
    echo '<td>';
    echo '<form method="post">';
    echo '<input type="hidden" name="delete_row_id" value="'.$row['id'].'">';
    echo '<button type="submit" name="delete_row_btn" class="btn">Удалить</button>';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
}

Database::disconnect();
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '<div class="row" style="margin-top: 20px;">';
echo '<div class="col-md-12" style="text-align: center;">'; // Добавляем стиль text-align: center;
echo '<form method="POST">';
echo '<button type="submit" name="delete_all_btn" class="btn btn-danger">Удалить все данные</button>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
