<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html';?>
  
  <title>Администрирование - вероятностный прогноз температуры воздуха и осадков</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - вероятностный прогноз температуры воздуха и осадков</h3>
      <form action="/admin/pfatp_exec.php" method="post">
        <div class='form-row'><input type="date" name="date" value="<?=date('Y-m-d')?>" placeholder="Дата" required></div>
        <div class='form-row'><textarea rows="5" cols="50" name="desc" placeholder="Описание" required></textarea></div>
        <div class='form-row'><input type="password" name="password" placeholder="Пароль" required></div>
        <div class='form-row'><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
