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
<?php
	$i=0;	
    $id = null;	
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];	
		$_SESSION['testid'] = $id;	
    }
    if ( null==$id ) {
        header("Location: select.php");
    }    			   			
	// Заголовок тестового задания	
	$pdo = Database::connect();
	//$sql="SELECT TOP 1 * FROM view_question WHERE testid=?";
	$sql="SELECT  * FROM view_question WHERE testid=? LIMIT 1";
	$stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
    $row2 = $stmt->fetch(PDO::FETCH_ASSOC);		
	Database::disconnect();		
	// Подсчет количества правильных ответов, запись в протокол
	if (isset($_POST['accept']))  {				
		$pdo = Database::connect();						
		$sql = "SELECT * FROM view_question WHERE testid=".$id;	
		$res = 0;							
		foreach ($pdo->query($sql) as $row) {			
			// Вопрос мультиответный или нет
			$j = 0;
			$multi = false;
			if ($row['ok1']==1) $j++;
			if ($row['ok2']==1) $j++;
			if ($row['ok3']==1) $j++;
			if ($row['ok4']==1) $j++;
			if ($row['ok5']==1) $j++;
			if ($j>1) $multi = true;
			//echo"i-".$i." j-".$j." multi-".$multi." <br> ";
			// Проверка правильности ответов
			if ($multi) {
				// Один вопрос - нексолько варианто ответов
				$ok1 = 0;
				$ok2 = 0;
				$ok3 = 0;
				$ok4 = 0;
				$ok5 = 0;
				$x_name='numbers1'.$i;
				if (isset($_POST[$x_name])) {
					if ($_POST[$x_name] == "on1") $ok1 = 1;				
				}
				$x_name='numbers2'.$i;
				if (isset($_POST[$x_name])) {
					if ($_POST[$x_name] == "on2") $ok2 = 1;				
				}
				$x_name='numbers3'.$i;
				if (isset($_POST[$x_name])) {
					if ($_POST[$x_name] == "on3") $ok3 = 1;				
				}
				$x_name='numbers4'.$i;
				if (isset($_POST[$x_name])) {
					if ($_POST[$x_name] == "on4") $ok4 = 1;				
				}
				$x_name='numbers5'.$i;
				if (isset($_POST[$x_name])) {
					if ($_POST[$x_name] == "on5") $ok5 = 1;				
				}				
				if (($row['ok1']==$ok1) && ($row['ok2']==$ok2) && ($row['ok3']==$ok3) && ($row['ok4']==$ok4) && ($row['ok5']==$ok5))
				{
					$res++;
				}
			}
			else {
				// Один вопрос - один правильный ответ
				$x_name='numbers'.$i;
				if (isset($_POST[$x_name])) {
					if (($_POST[$x_name] == "on1")&&($row['ok1']==1)) $res++;				
				}
				//$x_name='numbers2'.$i;
				if (isset($_POST[$x_name])) {
					if (($_POST[$x_name] == "on2")&&($row['ok2']==1)) $res++;				
				}
				//$x_name='numbers3'.$i;
				if (isset($_POST[$x_name])) {
					if (($_POST[$x_name] == "on3")&&($row['ok3']==1)) $res++;				
				}
				//$x_name='numbers4'.$i;
				if (isset($_POST[$x_name])) {
					if (($_POST[$x_name] == "on4")&&($row['ok4']==1)) $res++;				
				}
				//$x_name='numbers5'.$i;
				if (isset($_POST[$x_name])) {
					if (($_POST[$x_name] == "on5")&&($row['ok5']==1)) $res++;				
				}
			}		
			$i++;			
		}			
		// Добавление результата в протокол		
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO protocol (datep,usersid,testid,result) values(?,?,?,?)";				
		$datep = gmdate("Y-m-d H:i:s"); 
		$usersid = $_SESSION['usersid'];
		$testid = $_SESSION['testid'];
		$result = round($res/$i*100);		
		$stmt = $pdo->prepare($sql);		
		$stmt->execute(array($datep, $usersid, $testid,$result ));			
		Database::disconnect();	
		$result = $Lang['testing_completed'].$result."%";				
		$i=0;
		echo '<script language="javascript">';
		echo 'if(!alert("'.$result.'")) window.location.href="select.php"';
		echo '</script>';
	}
?>
<body>
	<?php if (!empty($message)) {echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';}?>	
    <div class="container">     
		<form class="form-horizontal" action="run.php?id=<?php echo $id?>" method="post">   
			<div class="row">
				<h3 text-align="center">"<?php echo $Lang['passing_the_test_task'].': '.$row2['title'];?>"</h3>
				<br>
				<h4 text-align="center"><?php echo $Lang['minute'];echo ": ".$row2['minute'].". ";echo $Lang['rate'];;echo ": ".$row2['rate']?></h4>				
				<input type="hidden" id="minute" value="<?php echo $row2['minute']?>">				
			</div>    			
			<div>
				<p id="display" style="font-weight: bold"><strong></strong></p>			
			</div>			
			<div class="form-actions" style="margin-bottom: 10px">
				<a class="btn btn-outline-info" style="width:100px" href="select.php"><?php echo $Lang['back']?></a>		
				<button type="submit" style="width:100px" id="accept" name="accept" class="btn btn-outline-success" onclick="return confirm('Завершить тест?')"><?php echo $Lang['accept']?></button>												
			</div>                                           			
			<div class="control-group">
                <div class="controls">
                    <?php if (!empty($result)): ?>
						<h4 text-align="center"><?php echo$result?></h4>                                
                    <?php endif;?>
                </div>                      
			</div>	
			<div class="container-fluid">
				<ul class="nav nav-tabs nav-justified">
					<?php
					$pdo = Database::connect();
					$sql = "SELECT * FROM view_question WHERE testid=".$id;							
					$x=0;
					foreach ($pdo->query($sql) as $row) {
						echo '<li class="nav-item">';
						if ($x==0) echo '<a class="nav-link active" data-toggle="tab" href="#id'.$row['id'].'">'.($x+1).'</a>';	
							else echo '<a class="nav-link" data-toggle="tab" href="#id'.$row['id'].'">'.($x+1).'</a>';	;	
						$x=$x+1;
						echo '</li>';
					}	
					Database::disconnect();
					?>
				</ul>				
				<div class="tab-content">				
				<?php
					$pdo = Database::connect();
					$sql = "SELECT * FROM view_question WHERE testid=".$id;							
					$x=0;
					$i=0;
					foreach ($pdo->query($sql) as $row) {
						// Определить сколько вариантов ответа есть один или больше, если один до радиогруппа если больше - checkbox
						$j = 0;
						$multi = false;
						if ($row['ok1']==1) $j++;
						if ($row['ok2']==1) $j++;
						if ($row['ok3']==1) $j++;
						if ($row['ok4']==1) $j++;
						if ($row['ok5']==1) $j++;
						if ($j>1) $multi = true;	
						
						if ($x==0) echo '<div class="container tab-pane active" id="id'.$row['id'].'">';	
							else echo '<div class="container tab-pane" id="id'.$row['id'].'">';	
						$x=$x+1;
						echo '<div class="card" style="margin: 2px;">';
						echo '<div class="card-body">';			
						echo '<div class="row">';
						echo '<div class="col-md-4">';
						if($row['photo']!=null)	echo '<img class="card-img-top" alt="photo" src="data:'.$row['mime'].';base64,'.base64_encode($row['photo']).'">';
						echo '</div>';						
						echo '<div class="col-md-8">';
						echo '<h4 class="card-title">'. $row['question'].'</h4>';
						
						echo '<div class="control-group">';
						echo '<div class="controls">';
						if($row['reply1']){
							echo '<label class="control-label">'.$Lang['reply1'].'</label>';echo ' ';
							if ($multi)
								echo '<input type="checkbox"  name="numbers1'.$i.'" value="on1" />'." ".$row['reply1'].'<br />';									
							else
								echo '<input type="radio"  name="numbers'.$i.'" value="on1" />'." ".$row['reply1'].'<br />';									
						}
						echo '</div>';
						echo '</div>';
						
						echo '<div class="control-group">';
						echo '<div class="controls">';
						if($row['reply2']){
							echo '<label class="control-label">'.$Lang['reply2'].'</label>';echo ' ';
							if ($multi)
								echo '<input type="checkbox"  name="numbers2'.$i.'" value="on2" />'." ".$row['reply2'].'<br />';									
							else
								echo '<input type="radio"  name="numbers'.$i.'" value="on2" />'." ".$row['reply2'].'<br />';
						}
						echo '</div>';
						echo '</div>';
																
						echo '<div class="control-group">';
						echo '<div class="controls">';
						if($row['reply3']){
							echo '<label class="control-label">'.$Lang['reply3'].'</label>';echo ' ';
							if ($multi)
								echo '<input type="checkbox"  name="numbers3'.$i.'" value="on3" />'." ".$row['reply3'].'<br />';									
							else
								echo '<input type="radio"  name="numbers'.$i.'" value="on3" />'." ".$row['reply3'].'<br />';
						}
						echo '</div>';
						echo '</div>';
																								
						echo '<div class="control-group">';
						echo '<div class="controls">';
						if($row['reply4']){
							echo '<label class="control-label">'.$Lang['reply4'].'</label>';echo ' ';
							if ($multi)
								echo '<input type="checkbox"  name="numbers4'.$i.'" value="on4" />'." ".$row['reply4'].'<br />';									
							else
								echo '<input type="radio"  name="numbers'.$i.'" value="on4" />'." ".$row['reply4'].'<br />';
						}
						echo '</div>';
						echo '</div>';
								
						echo '<div class="control-group">';
						echo '<div class="controls">';
						if($row['reply5']){
							echo '<label class="control-label">'.$Lang['reply5'].'</label>';echo ' ';
							if ($multi)
								echo '<input type="checkbox"  name="numbers5'.$i.'" value="on5" />'." ".$row['reply5'].'<br />';									
							else
								echo '<input type="radio"  name="numbers'.$i.'" value="on5" />'." ".$row['reply5'].'<br />';
						}
						echo '</div>';
						echo '</div>';
						
						echo '</div>';			
						echo '</div>';				
						echo '</div>';				
						echo '</div>';	
						echo '</div>';
						$i++;
					}	
					Database::disconnect();
					?>
				</div> <!-- tab-content	-->	
			</div>	<!-- container-fluid -->										
		</form>		
    </div> <!-- container -->
<script>
	// Считать время выполнения
	var y = parseInt(document.getElementById("minute").value);
	// Запуск таймера 
	timerRun(new Date(), y);	
	// Таймер
	function timerRun(t,x){		
		// Установить время окончания работ: ко времени t добавить x минут
		t.setMinutes(t.getMinutes() + x);
		var countDownDate = new Date(t).getTime();
		// Обратный отсчет обновляется каждую секунду
		var x = setInterval(function() {
			// Текущее время и дата
			var now = new Date().getTime();
			// Разница между дата останова таймера и текущей датой
			var distance = countDownDate - now;
			// Расчет дней, часов, минут, секунд
			//var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			if (hours.toString().length==1) {hours = '0' + hours;};
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			if (minutes.toString().length==1) {minutes = '0' + minutes;};
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			if (seconds.toString().length==1) {seconds = '0' + seconds;};
			// Вывод результата в элемент с id="display"
			document.getElementById("display").innerHTML = + hours + ":" + minutes + ":" + seconds + "";
			// Если отcчет времени завершен - принудительное завершениеы
			if (distance < 0) {
				clearInterval(x);
				$("#accept").click();
				alert("Timeout");
			}
		}, 1000);
	}	
</script>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Geometry/includes/footer.php'; ?>
