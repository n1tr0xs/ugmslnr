<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html';?>
  <title>Администрирование - текущая погода</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'> 
      <form action="/admin/weather_current_exec.php" method="post">
        <fieldset>
          
          <label for="date">Дата</label> 
          <input type="date" name="date" value="<?=date('Y-m-d')?>" required>
          
          <label for="icon">Иконка</label>
          <select name="icon" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`icons` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row){ ?>
              <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <? } ?>
          </select>
          
          <label>Температура</label>          
          <input type="text" id="temperature" name="temperature" required>
          
          <label>Скорость ветра</label>
          <input type="text" id="wind_speed" name="wind_speed" required>
          
          <label>Влажность</label>          
          <input type="number" id="humidity" name="humidity" required>
          
          <label>Давление</label>          
          <input type="number" id="pressure" name="pressure" required>
          
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>

          <button id='submit-button'>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
</div>
<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>