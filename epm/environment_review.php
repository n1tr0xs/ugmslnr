<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Ежемесячный бюллетень загрязнения окружающей среды">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <title>Ежемесячный бюллетень загрязнения окружающей среды</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Ежемесячный бюллетень загрязнения окружающей среды</h3>
      <table class='no-border text-left table-striped'>
        <? 
          $path = "/updatable/environment_review/";
          $ext = ".pdf";
          $files = get_files($path, $ext); 
          foreach($files as $path => $name){ ?>
            <tr><td><a target="_blank" href="<?=$path?>">  <?=$name?></a></td></tr>
          <? } ?>
      </table>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
