<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; 
?>
<body>
    <?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
    <div class="container">
        <div class="row">
            <h3 style="text-align:center;"><?php echo $Lang['manuals'];?></h3>
        </div>
		<div class="row" style="max-width: 800px; margin: 0 auto; justify-content:center">
            <table id="myTable" class="cell-border hover stripe">
                <thead>
                    <tr>
                        <th><?php echo $Lang['title'];?></th>
                        <th><?php echo $Lang['datem'];?></th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/connection.php';
                        $pdo = Database::connect();

                        $sql = "SELECT * FROM view_manual ORDER BY language_title, manual_title";
                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td title="'.$row['details'].'"> <a href="'. $row['uploadpath'] .'" target="_blank">'. $row['manual_title'] . '</a>.';
                            echo '<br>' . $Lang['language'] . ': ' . $row['language_title'] .'</td>';
                            echo '<td>'.date("d.m.Y", strtotime($row['datem'])).'</td>';
                            echo '</tr>';
                        }

                        Database::disconnect();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?> 
