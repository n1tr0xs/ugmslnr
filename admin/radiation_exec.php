<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$desc = $_POST['desc'];

$sql = "
replace into `ugmslnr`.`radiation` values 
('{$date}', '{$desc}')
";

if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>