<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>

<?
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
// $check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
// if($input_password != $check_string){
// 	echo "Неверный пароль!";
// 	exit();
// }

$conn = connect("sinop", "sinop");

$date = $_POST['date'];
$day_part = $_POST['day_part'];
$icon = $_POST['icon'];
$wind_direction = $_POST['wind_direction'];
$wind_min = $_POST['wind_min'];
$wind_max = $_POST['wind_max'];
$temp_min = $_POST['temp_min'];
$temp_max = $_POST['temp_max'];


$sql = "select count(*) c from `ugmslnr`.`weather_table_forecast` where `date`='{$date}' and `day_part`={$day_part}";
$row = get_row($conn, $sql);
if($row['c']){
  $sql = "
  update `ugmslnr`.`weather_table_forecast` 
  set `icon`={$icon}, `wind_direction`={$wind_direction}, `wind_speed_min`={$wind_min}, `wind_speed_max`={$wind_max}, `temp_min`={$temp_min}, `temp_max`={$temp_max} 
  where `date`='{$date}' and `day_part`={$day_part}
  ";
} else {
  $sql = "
  insert into `ugmslnr`.`weather_table_forecast` 
  values (NULL, '{$date}', {$day_part}, {$icon}, {$wind_direction}, {$wind_min}, {$wind_max}, {$temp_min}, {$temp_max});
  ";
}
if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<br>";
echo "<a href='/admin_db/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>