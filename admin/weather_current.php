<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("visiter", "");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - текущая погода</title>
</head>
<body>
  <div id='containter'>
    <div id='content'> 
      <form action="/admin/weather_current_exec.php" method="post">
        <div class="form-row"> 
          <label for="date">Дата</label> 
          <input type="date" name="date" value="<? echo date('Y-m-d'); ?>" required>
        </div>
        <div class="form-row">
          <label for="icon">Иконка</label>
          <select name="icon" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`icons` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row): ?>
              <option value="<? echo $row['id']; ?>"><? echo $row['name']; ?></option>
            <? endforeach; ?>
          </select>
        </div>
        <div class="form-row"> 
          <label>Температура</label>          
          <input type="number" id="temp_min" name="temperature" required>
        </div>
        <div class="form-row"> 
          <label>Скорость ветра</label>
          <input type="number" id="wind_min" name="wind_speed" required>
        </div>
        <div class="form-row"> 
          <label>Влажность</label>          
          <input type="number" id="humidity" name="humidity" required>
        </div>
        <div class="form-row"> 
          <label>Давление</label>          
          <input type="number" id="pressure" name="pressure" required>
        </div>
        <div class='form-row'><input type="password" name="password" placeholder="Пароль" required></div>
        <div class="form-row"><button id='submit-button'>Отправить данные</button></div>
      </form><br> <a href='/admin/index.php'> Список панелей администрирования </a>
    </div>
  </div>
</div>
</body>
</html>