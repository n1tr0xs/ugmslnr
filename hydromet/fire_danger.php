<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Пожарная опасность</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <p>Лесные пожары остаются одним из самых мощных природных катастрофических явлений. Обеспечению своевременной и эффективной подготовки людей и техники к тушению пожаров во многом способствуют знания ожидаемой степени пожарной опасности с разной заблаговременностью.</p>
      <p>Метеорологические условия относятся к одним из главных факторов вероятности возникновения пожаров в природе.</p>
      <p>Для оценки пожарной опасности по условиям погоды применяется комплексный показатель пожарной опасности (ППО), который рассчитывается ежедневно в пожароопасный период на основе метеорологических данных по установленной методике. ППО может меняться от одного до нескольких тысяч градусов, а в периоды сухой и жаркой погоды его значение может превышать 10000 градусов.</p>
      <p>В зоне ответственности ФГБУ «УГМС по ЛНР» применяются следующие классы пожарной опасности по условиям погоды:</p>
      <table>
        <caption>Классы пожарной опасности в лесу по условиям погоды</caption>
        <thead>
          <tr>
            <th>Класс пожарной опасности по условиям погоды</th>
            <th>Значение комплексного показателя</th>
            <th>Степень пожарной опасности</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>I</td>
            <td>до 300</td>
            <td>-</td>
          </tr>
          <tr>
            <td>II</td>
            <td>от 301 до 1000</td>
            <td>малая</td>
          </tr>
          <tr>
            <td>III</td>
            <td>от 1001 до 4000</td>
            <td>средняя</td>
          </tr>
          <tr>
            <td>IV</td>
            <td>от 4001 до 10000</td>
            <td>высокая</td>
          </tr>
          <tr>
            <td>V</td>
            <td>более 10000</td>
            <td>чрезвычайная</td>
          </tr>
        </tbody>
      </table>
      <div class='text-center'>
        <img src="/updatable/fire_danger.png" alt="Пожарная опасность" class='no-border'>
      </div>
      <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/fire_forecast.html'; ?>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
