<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$date = $conn->real_escape_string($_POST['date']);
$desc_city = $conn->real_escape_string($_POST['desc_city']);
$desc_region = $conn->real_escape_string($_POST['desc_region']);

$sql = "
replace into `ugmslnr`.`weather_forecast_text` values 
('{$date}', '{$desc_city}', '{$desc_region}')
";

$ch = curl_init(($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/admin/result.php');
$ch_opts = [];
$ch_opts[CURLOPT_RETURNTRANSFER] = true;
$ch_opts[CURLOPT_POSTFIELDS] = [];
$ch_opts[CURLOPT_POSTFIELDS]['file'] = basename(__FILE__, '_exec.php');
$ch_opts[CURLOPT_POSTFIELDS]['resp'] = ($conn->query($sql) === TRUE);
curl_setopt_array($ch, $ch_opts);
echo curl_exec($ch);
?>