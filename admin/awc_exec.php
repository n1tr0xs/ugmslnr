<?
$date = $_POST['date'];
$desc = $_POST['desc'];

$text = "";
$text .= "<p>Прогноз уровня загрязнения атмосферного воздуха в г. Луганске и городах Луганской Народной Республики на ". $date. " года";
$text .= "<p class='description'>". $desc. "</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/awc.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/awc.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>