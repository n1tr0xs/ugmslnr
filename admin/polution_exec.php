<?
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}
// TODO
$text = "<p>
  По данным наблюдений на государственной наблюдательной сети на стационарных постах ФГБУ «УГМС по ЛНР» по территории Луганской Народной Республики за период с 13:00 19.07.23 по 07:00 20.07.23 отмечалась низкая степень загрязнения атмосферного воздуха, максимальные разовые концентрации загрязняющих веществ санитарно-гигиенических норм не превышали.
</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>