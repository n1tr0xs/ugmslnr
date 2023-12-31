<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - пожароопасность карта</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Администрирование - пожароопасность карта</h3>
      <form action="/admin/fire_danger_pic_exec.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <div class='file-drop-area span2'>
            <span class="fake-btn">Выберите файл</span>
            <span class="file-msg" id="file-msg">или перетащите файл сюда</span>
            <input type="file" name="fileToUpload" class="file-input" id="file-input" accept="image/*" required>
          </div>

          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>

          <button type="submit">Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
