<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - неблагоприятные метеорологические условия</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - неблагоприятные метеорологические условия</h3>
      <form action="/admin/awc_exec.php" method="post">
        <fieldset>

          <label>Дата</label>
          <input type="date" name="date" value="<?=date('Y-m-d')?>" placeholder="Дата" required>
          
          <label>Описание</label>
          <textarea rows="5" cols="50" name="desc" placeholder="Описание" required></textarea>
          
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>
          
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
