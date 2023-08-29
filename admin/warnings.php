<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - предупреждения</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - предупреждения</h3>
      <form method="post" action="/admin/warnings_exec.php">
        <div class='form-row'><label for="meteo">Метеорологическое</label><input type="checkbox" name="meteo"></div>
        <div class='form-row'><label for="hydro">Гидрометеорологическое</label><input type="checkbox" name="hydro"></div>
        <div class='form-row'><label for="agro">Агрометеорологическое</label><input type="checkbox" name="agro"></div>
        <div class='form-row'><label for="pollution">Загрязнение окружающей среды</label><input type="checkbox" name="pollution"></div>
        <div class='form-row'><label for="password">Пароль:</label><input type="password" name="password" placeholder="Пароль" required></div>
        <div class='form-row'><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
