<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - прогноз погоды - таблица</title>
</head>
<? $conn = connect('sinop', 'sinop'); ?>
<body>
  <div id='containter'>
    <div id='content'> 
      <form action="/admin/weather_forecast_table_exec.php" method="post">
        <div class="form-row"> 
          <label for="date">Дата</label> 
          <input type="date" name="date">
        </div>
        <div class="form-row"> 
          <label for="day_part">Часть дня</label>
          <select name="day_part" required>
          <?
          $sql = "SELECT * FROM `ugmslnr`.`day_parts` order by `id`";
          $arr = get_arr($conn, $sql);
          foreach($arr as $row): ?>
            <option value="<? echo $row['id']; ?>"><? echo $row['name']; ?></option>
            <? endforeach; ?>
          </select>
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
          <label for="wind_direction">Направление ветра</label>
          <select name="wind_direction" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`wind_directions` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row): ?>
              <option value="<? echo $row['id']; ?>"><? echo $row['direction']; ?></option>
            <? endforeach; ?>
          </select>
        </div>
        <div class="form-row"> 
          <label>Скорость ветра</label>
          <input type="number" id="wind_min" name="wind_speed" required>
        </div>
        <div class="form-row"> 
          <label>Температура</label>          
          <input type="number" id="temp_min" name="temperature" required>
        </div>
        <div class="form-row">
          <button id='submit-button'>Отправить данные</button>
        </div>
      </form><br> <a href='/admin/index.html'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>