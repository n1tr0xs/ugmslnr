<?
$date1 = $_POST['date1'];
$desc1 = $_POST['desc1'];
$date2 = $_POST['date2'];
$desc2 = $_POST['desc2'];

$text = "";
$text .= "<p class='day'>Прогноз на ". $date1. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc1. "</p>";
$text .= "<p class='day'>Прогноз на ". $date2. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc2. "</p>";


$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/fire_forecast.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/fire_forecast.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>