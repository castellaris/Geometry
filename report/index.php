<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/navigation.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/shared.php'; ?>
<?php
// Если это не менеджер - то вход запрещен
if ($manager == 0) {
	header("location: /Geometry/login.php");
}
?>
<?php
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	$start = null;
	if ( !empty($_GET['start'])) {
		$start = $_REQUEST['start'];
	}
	$end = null;
	if ( !empty($_GET['end'])) {
		$end = $_REQUEST['end'];
	}
?>
<body>
<div class="container">
    <div class="row">
        <h3 style="text-align: center;"><?php echo $Lang['reports'] ?></h3>
    </div>
    <form class="form-horizontal" enctype="multipart/form-data">
        <div style="justify-content: center;">
            <input type="date" value="<?php echo !empty($start)?$start:date("Y")."-01-01"?>" name ="start" id ="start">
            <input type="date" value="<?php echo !empty($end)?$end:date("Y-m-d")?>" name = "end" id ="end">
        </div>
        <div class="row" style="justify-content: center;">
            <div class="col-md-3" style="padding:5px">
                <button class="btn btn-outline-info" name="report1" id="report1" value="1" style="width:100%; height: 70px; font-size: 14px; padding-top: 10px;"><?php echo $Lang['visits'];?></button>
            </div>
            <div class="col-md-3" style="padding:5px">
                <button class="btn btn-outline-info" name="report2" id="report2" value="1" style="width:100%; height: 70px; font-size: 14px; padding-top: 10px;"><?php echo $Lang['protocol_test'];?></button>
            </div>                                
            <div class="col-md-3" style="padding:5px">
                <button class="btn btn-outline-info" name="report3" id="report3" value="1" style="width:100%; height: 70px; font-size: 14px; padding-top: 10px;"><?php echo $Lang['protocol_task'];?></button>
            </div>                                
        </div>
        <div class="row">
            <?php
                if (!empty($_GET['report1'])) {
                    if ($_GET['report1'] == 1) {
                        include "visits.php";
                    }
                }               
                if (!empty($_GET['report2'])) {
                    if ($_GET['report2'] == 1) {
                        include "protocol.php";
                    }
                }               
                if (!empty($_GET['report3'])) {
                    if ($_GET['report3'] == 1) {
                        include "decisions.php";
                    }
                }               
            ?>
        </div>
    </form>
	<div text-align="center">
				<a class="btn btn-outline-info" style="width:100px" href="javascript:history.back();"><?php echo $Lang['back'];?></a>	
				<a class="btn btn-outline-info" style="width:100px" href="javascript:scroll(0,0)"><?php echo $Lang['page_up'];?></a>	
			</div>	
</div> <!-- /container -->

</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
