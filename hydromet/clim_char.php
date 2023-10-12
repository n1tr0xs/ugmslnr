<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Климатическая характеристика">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <title>Климатическая характеристика</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <table class='no-border text-left table-striped'>
        <? 
          $path = "/updatable/clim_char/";
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
