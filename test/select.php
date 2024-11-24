<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/visits.php'; ?>
<?php
// Если это не зарегистрированный пользователь - то вход запрещен
if(!isset($_SESSION["session_login"])) {
    // Сохранить страницу (для возврата)
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    header("location: /Geometry/login.php");
}
?>
<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>   
    <div class="container">
        <div class="row">
            <h3 style="text-align: center;"><?php echo $Lang['run_tests'];?></h3>              
        </div>      
        <br>
        <div class="row">   
            <table id="myTable" class="cell-border hover stripe" style="width:100%">
                <thead>
                    <tr>
                    <th><?php echo $Lang['title'];?></th>
                    <th><?php echo $Lang['minute'];?></th>
                    <th><?php echo $Lang['rate'];?></th>                          
                    <th></th>                          
                    </tr>
                </thead>
                <tbody>                     
                    <?php       
                        $pdo = Database::connect();                        
                        $sql = "SELECT * FROM test";                                                    
                        if (isset($_REQUEST['searchBtn']))
                            $sql = $sql.' WHERE title LIKE \'%'.$_REQUEST['searchText'].'%\'';                                    
                        $sql = $sql.' ORDER BY title';                                        
                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['title'] . '</td>';
                            echo '<td>'. $row['minute'] . '</td>';
                            echo '<td>'. $row['rate'] . '</td>';                                
                            echo '<td>';
                            echo '<a class="btn btn-outline-info" style="width:100px" href="run.php?id='.$row['id'].'">Старт</a>';
                            echo '</td>';
                            echo '</tr>';
                        }                                       
                    ?>
                </tbody>
            </table>            
        </div>     
        <div class="row">
            <h3 style="text-align: center;"><?php echo $Lang['protocol_test'];?></h3>                
        </div>  
        <div class="row">
            <table id="myTable2" class="display" style="width:100%;">
                <thead class="thead-dark">
                    <tr>
                        <th><?php echo $Lang['datep'];?></th>
                        <th><?php echo $Lang['name'];?></th>
                        <th><?php echo $Lang['title'];?></th>                      
                        <th><?php echo $Lang['result'];?></th>                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pdo = Database::connect();
                    $sql = "SELECT * FROM view_protocol";
                    $sql = $sql." WHERE usersid=".$_SESSION['usersid'];
                    $sql = $sql." ORDER BY datep";
                    foreach ($pdo->query($sql) as $row) {
                        echo '<tr>';
                        echo '<td>'.date("d.m.Y H:i", strtotime($row['datep'])).'</td>';
                        echo '<td>'. $row['name'] . '</td>';
                        echo '<td>'. $row['title'] . '</td>';
                        echo '<td>'. $row['result'] . '</td>';
                        echo '</tr>';                        
                    }
                    Database::disconnect();
                    ?>          
                </tbody>
            </table>
        </div>      
    </div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
