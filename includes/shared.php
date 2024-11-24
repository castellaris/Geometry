<?php
function inputText2($title, $field, $data, $additionally, $type, $size)
{
	// Вывод на экран разметки для изменения текстового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $type - тип поля "text", "date" и т.д., $size - размер текстовго поля
	echo '<div class="input-group mb-3">';
	echo '<div class="input-group-prepend">';
	echo '<span class="input-group-text">'.$title.'</span>';
	echo '</div>';
	echo '<input name="'.$field.'" id="'.$field.'" type="'.$type.'" size="'.$size.'" '.$additionally.' aria-label='.$title.' aria-describedby="basic-addon1"';
	if (!empty($data)) echo ' value="'.htmlspecialchars($data).'"';
	echo '>';
	echo '</div>';
	echo "\n";
}
function inputText($title, $field, $data, $additionally, $type, $size)
{
	// Вывод на экран разметки для изменения текстового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $type - тип поля "text", "date" и т.д., $size - размер текстовго поля
	echo '<div class="control-group">';
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	echo '<input name="'.$field.'" id="'.$field.'" type="'.$type.'" size="'.$size.'" '.$additionally;
	if (!empty($data)) echo ' value="'.htmlspecialchars($data).'"';
	echo '>';
	echo '</div>';
	echo "\n";
	echo '</div>';
}
function inputNumber2($title, $field, $data, $additionally, $min, $max, $step)
{
	// Вывод на экран разметки для изменения числового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $min - минимальное значение, $max - максимальное значение, $step - шаг

	echo '<div class="input-group mb-3">';
	echo '<div class="input-group-prepend">';
	echo '<span class="input-group-text">'.$title.'</span>';
	echo '</div>';
	echo '<input name="'.$field.'" id="'.$field.'" type="number" min="'.$min.'" max="'.$max.'" step="'.$step.'" aria-describedby="basic-addon1" '.$additionally;
	if (!empty($data)) echo ' value="'.$data.'"';
	echo '>';
	echo '</div>';
	echo "\n";
	echo '<div class="control-group ';
	echo '</div>';
	echo "\n";
}
function inputNumber($title, $field, $data, $additionally, $min, $max, $step)
{
	// Вывод на экран разметки для изменения числового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $min - минимальное значение, $max - максимальное значение, $step - шаг
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	echo '<input name="'.$field.'" id="'.$field.'" '.$additionally.' type="number" min="'.$min.'" max="'.$max.'" step="'.$step.'" value="';
	if (!empty($data)) echo $data;
	echo '">';
	echo '</div>';
	echo "\n";
	echo '</div>';
}
function inputImage($title, $field, $data, $additionally)
{
	// Вывод на экран разметки для изменения текстового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $error - ошибка ввода
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	echo '<input name="'.$field.'" id="'.$field.'" '.$additionally.' type="file" class="inputFile" accept="image/*">';
	echo '</div>';
	echo "\n";
	echo '</div>';
}
function inputFile($title, $field, $data, $additionally, $accept)
{
	// Вывод на экран разметки для изменения текстового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	echo '<input name="'.$field.'" id="'.$field.'" '.$additionally.' type="file" accept="'.$accept.'"class="inputFile">';
	echo '</div>';
	echo "\n";
	echo '</div>';
}
function inputCheckBox($title, $field, $data, $additionally)
{
	// Вывод на экран разметки для изменения логического поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно,
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	echo '<input name="'.$field.'" id="'.$field.'" '.$additionally.' type="checkbox"';
	if ($data==1) echo 'checked';
	echo '>';
	echo '</div>';
	echo "\n";
	echo '</div>';
}
function inputTextArea($title, $field, $data, $additionally, $cols, $rows)
{
	// Вывод на экран разметки для изменения текстового поля БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $cols - ширина поля в колонках, $rows - количество строк
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	echo '<textarea name="'.$field.'" id="'.$field.'" '.$additionally.' cols="'.$cols.'" rows="'.$rows.'" >';
	if (!empty($data)) echo htmlspecialchars($data);
	echo '</textarea>';
	echo '</div>';
	echo "\n";
	echo '</div>';
}
function inputSelect($title, $field, $data, $additionally, $sql, $width)
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки для элемента ввода select БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $sql - размер текстовго поля
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	$pdo = Database::connect();
	echo "<select ".$additionally." name='".$field."' id='".$field."' class='chosen' style='width:".$width.";'>";
	echo "<option selected='selected' value=0 disabled>".$Lang['select']."</option>";
	foreach ($pdo->query($sql) as $row) {
		$id = $row['id'];
		$fieldtitle = $row['title'];
		if ($data==$id){
			echo '<option value="'.$id.'" selected>'.htmlspecialchars($fieldtitle).'</option>';
		}
		else{
			echo '<option value="'.$id.'">'.htmlspecialchars($fieldtitle).'</option>';
		}
	}
	echo "</select>";
	echo '</div>';
	echo "\n";
	echo '</div>';
}

function inputSelect2($title, $field, $data, $additionally, $sql, $width)
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки для элемента ввода select БД $title - Надпись, $field - название поля БД,
	// $data - текущее значение поля, $additionally - дополнительно, $sql - размер текстовго поля
	echo '<div class="control-group">';
	echo "\n";
	echo '<label class="control-label"><strong>'.$title.'</strong></label>';
	echo "\n";
	echo '<div class="controls">';
	echo "\n";
	$pdo = Database::connect();
	echo "<select ".$additionally." name='".$field."' id='".$field."' class='chosen' style='width:".$width.";' ".$additionally.">";
	echo "<option selected='selected' value=0 disabled>".$Lang['select']."</option>";
	foreach ($pdo->query($sql) as $row) {
		$id = $row['id'];
		$fieldtitle = $row['title'];
		$price = $row['price'];
		if ($data==$id){
			echo '<option value="'.$id.'" data-price="'.$price.'" selected>'.htmlspecialchars($fieldtitle).'</option>';
		}
		else{
			echo '<option value="'.$id.'" data-price="'.$price.'" >'.htmlspecialchars($fieldtitle).'</option>';
		}
	}
	echo "</select>";
	echo '</div>';
	echo "\n";
	echo '</div>';
}

function readField($title, $data)
{
	// Вывод на экран разметки: Надписи $title и значения поля базы данных $data (Заголовок:данные)
	echo '<div class="control-group">';
	echo '<label class="control-label"><strong>'.$title.':</strong></label> ';
	echo $data;
	echo '</div>';
	echo "\n";
}
function readDateField($title, $data)
{
	// Вывод на экран разметки: Надписи $title и значения поля базы данных $data типа дата(Заголовок:данные)
	echo '<div class="control-group">';
	echo '<label class="control-label"><strong>'.$title.':</strong></label> ';
	echo date("d.m.Y", strtotime($data));
	echo '</div>';
	echo "\n";
}
function readDateTimeField($title, $data)
{
	// Вывод на экран разметки: Надписи $title и значения поля базы данных $data типа дата и время(Заголовок:данные)
	echo '<div class="control-group">';
	echo '<label class="control-label"><strong>'.$title.':</strong></label> ';
	echo date("d.m.Y H:i:s", strtotime($data));
	echo '</div>';
	echo "\n";
}
function readImg($title, $image, $mime)
{
	// Вывод на экран разметки: Надписи $title и значения поля базы данных $data (Заголовок:данные)
	echo '<div class="control-group">';
	echo '<label class="control-label"><strong>'.$title.':</strong></label> ';
	if ($image !=null)
		echo '<img height="200" src="data:'.$mime.';base64,'.base64_encode($image).'"><br>';
	echo '</div>';
	echo "\n";
}
function readCheckBox($title, $data)
{
	// Вывод на экран разметки: Надписи $title и значения логического поля базы данных $data (Заголовок:данные)
	echo '<div class="control-group">';
	echo '<label class="control-label"><strong>'.$title.':</strong></label> ';
	echo ($data==1)?'Да':'Нет';
	echo '</div>';
	echo "\n";
}
function btnCreateBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Создать и Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<button type="submit" class="btn btn-outline-success" style="width:100px">'.$Lang['create'].'</button>';
	echo "\n";
	echo '	<a class="btn btn-outline-info" style="width:100px" href="index.php">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}
function btnUpdateBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Изменить и Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<button type="submit" class="btn btn-outline-primary" style="width:100px">'.$Lang['update'].'</button>';
	echo "\n";
	echo '	<a class="btn btn-outline-info" style="width:100px" href="index.php">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}
function btnDeleteBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Удалить и Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<button type="submit" class="btn btn-outline-danger" style="width:100px">'.$Lang['delete'].'</button>';
	echo "\n";
	echo '	<a class="btn btn-outline-info" style="width:100px" href="index.php">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}
function btnRegistrationBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Регистрация и Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<button id="btnRegistration" type="submit" class="btn btn-outline-success" style="width:120px">'.$Lang['registration'].'</button>';
	echo "\n";
	echo '	<a	class="btn btn-outline-info" style="width:120px" onclick="history.back();">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}
function btnSendBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Отправить и Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<button type="submit" class="btn btn-outline-success" style="width:100px">'.$Lang['send'].'</button>';
	echo "\n";
	echo '	<a class="btn btn-outline-info" style="width:100px" onclick="history.back();">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}
function btnBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<a class="btn btn-outline-info" style="width:100px" onclick="history.back();">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}
function btnIndexBack()
{
	include ("lang.".$_SESSION['NowLang'].".php");
	// Вывод на экран разметки: кнопки Создать и Назад
	echo '<div class="form-actions" style="margin-bottom: 10px">';
	echo "\n";
	echo '	<a class="btn btn-outline-info" style="width:100px" href="index.php">'.$Lang['back'].'</a>';
	echo "\n";
	echo '</div>';
	echo "\n";
}

function rus2translit($string) {
	// Транслитерация с русского на английский
	$converter = array(
		'а' => 'a',	  'б' => 'b',	'в' => 'v',
		'г' => 'g',	  'д' => 'd',	'е' => 'e',
		'ё' => 'e',	  'ж' => 'zh',	'з' => 'z',
		'и' => 'i',	  'й' => 'y',	'к' => 'k',
		'л' => 'l',	  'м' => 'm',	'н' => 'n',
		'о' => 'o',	  'п' => 'p',	'р' => 'r',
		'с' => 's',	  'т' => 't',	'у' => 'u',
		'ф' => 'f',	  'х' => 'h',	'ц' => 'c',
		'ч' => 'ch',  'ш' => 'sh',	'щ' => 'sch',
		'ь' => '\'',  'ы' => 'y',	'ъ' => '\'',
		'э' => 'e',	  'ю' => 'yu',	'я' => 'ya',

		'А' => 'A',	  'Б' => 'B',	'В' => 'V',
		'Г' => 'G',	  'Д' => 'D',	'Е' => 'E',
		'Ё' => 'E',	  'Ж' => 'Zh',	'З' => 'Z',
		'И' => 'I',	  'Й' => 'Y',	'К' => 'K',
		'Л' => 'L',	  'М' => 'M',	'Н' => 'N',
		'О' => 'O',	  'П' => 'P',	'Р' => 'R',
		'С' => 'S',	  'Т' => 'T',	'У' => 'U',
		'Ф' => 'F',	  'Х' => 'H',	'Ц' => 'C',
		'Ч' => 'Ch',  'Ш' => 'Sh',	'Щ' => 'Sch',
		'Ь' => '\'',  'Ы' => 'Y',	'Ъ' => '\'',
		'Э' => 'E',	  'Ю' => 'Yu',	'Я' => 'Ya',
	);
	return strtr($string, $converter);
}

function str2url($str) {
	// переводим в транслит
	$str = rus2translit($str);
	// в нижний регистр
	$str = strtolower($str);
	// заменям все ненужное нам на "-"
	$str = str_replace(" ","_",$str);	// Удаление пробелов
	// удаляем начальные и конечные '-'
	$str = trim($str, "-");
	return $str;
}

function getAddress()
{
	// Случайный адрес
	$street = array("ул. Академическая", "ул. Баженова", "ул. Вавилова", "ул. Гастелло", "ул. Дружбы", "ул. Ермекова",
		"ул. Жамбыла", "ул. Защитная", "ул. Ипподромная", "ул. Кирпичная", "ул. Луначарского", "ул. Маметовой", "ул. Новоселов",
		"ул. Олимпийская", "ул. Победы", "ул. Рыскулова", "ул. Сарсекова", "ул. Сатыбалдина", "ул. Тулепова", "ул. Университетская", "ул. Фрунзе");
	return $street[rand(0, count($street)-1)].", ".+ rand(1, 200)."-".rand(1, 200);
}
function getPhone()
{
	// Случайный телефон
	$provider = array("700", "701", "702", "705", "747", "776", "777");
	return "+7-".$provider[rand(0, count($provider)-1)]."-".rand(100,999)."-".rand(1000, 9999);
}

function getDocumentNomer($length)
{
	// Случайные номер документа $length - количество цифр
	$number="";
	for ($i=0; $i<$length; $i++){
		$number = $number.rand(0,9);
	}
	return $number;
}

function getRandomDate($year1, $year2)
{
	// Случайная дата в диапазоне дат
	$y = rand($year1, $year2)*365 - rand(1,365);
	return date("Y-m-d", strtotime('-'.$y.' days'));
}

function getIIN($d)
{
	// Случайный ИИН
	$iin = "";
	// 1-6 разряд: Год, месяц, день
	$year = date('y', strtotime($d));
	$month = date('m', strtotime($d));
	$day =	date('d', strtotime($d));
	$iin = $year.$month.$day;
	// 7 разряд: век рождения и пол: Если цифра нечетная - пол мужской, четная - женский.
	// 1,2 - девятнадцатый век, 3,4 - двадцатый, 5,6 - двадцать первый.
	$yy = date('Y', strtotime($d));
	if ($yy <= 1900) $iin = $iin.rand(1,2);
	if (($yy >= 1901) && ($yy <= 2000)) $iin = $iin.rand(3,4);
	if (($yy >= 2001) && ($yy <= 2100)) $iin = $iin.rand(5,6);
	// 8-11 разряды: заполняет орган Юстиции
	$iin = $iin.rand(1000,9999);
	// 12 разряд: контрольная цифра, которая расчитывается по определенному алгоритму
	$iin = $iin.rand(0,9);
	return $iin;
}

function getBIN($d)
{
	// Случайный БИН
	$bin = "";
	// 1-4 разряд: Год, месяц, день
	$year = date('y', strtotime($d));
	$month = date('m', strtotime($d));
	$bin = $year.$month;
	// 5 разряд Значения типа юридического лица или ИП(С): 4 — для юридических лиц-резидентов;5 — для юридических лиц-нерезидентов;6 — для ИП(С);
	$bin = $bin.rand(4,6);
	// 6 разряд: Дополнительный признаком и определяется следующим образом: 0 — головного подразделения юридического лица или ИП(С); 1 — филиала юридического лица или ИП(С); 2 — представительства юридического лица или ИП(С); 3 — крестьянское (фермерское) хозяйство, осуществляющее деятельность на основе совместного предпринимательства
	$bin = $bin.rand(0,3);
	// 7-11 разряды: заполняет орган Юстиции
	$bin = $bin.rand(10000,99999);
	// 12 разряд: контрольная цифра, которая расчитывается по определенному алгоритму
	$bin = $bin.rand(0,9);
	return $bin;
}

?>