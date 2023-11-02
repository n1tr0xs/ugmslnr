<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Прогноз погоды по Луганску">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Погода</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Прогноз погоды </h3>
      <div id='forecast'>
        <table>
          <?
          $sql = "
          select date from (
          select distinct(date) date
          from `ugmslnr`.`weather_forecast_table` 
          order by `date` desc 
          limit 3
          ) a
          order by date asc
          ";
          $days = get_arr($conn, $sql);
          ?>
          <tr>
            <? foreach ($days as $row){ ?>
              <td colspan="2"><?=date("d.m", strtotime($row['date']))?></td>
            <? } ?>
          </tr>
          <tr>
            <td>ночь</td>
            <td>день</td>
            <td>ночь</td>
            <td>день</td>
            <td>ночь</td>
            <td>день</td>
          </tr>
          <? 
          $sql = "
          select * from (
            select 
              w.date date, 
              w.day_part day_part, 
              w.temperature temperature,
              w.wind_speed wind_speed,
              wd.direction wind_direction,
              i.url icon
            from 
              `ugmslnr`.`weather_forecast_table` w
              join `ugmslnr`.`icons` i on (w.icon=i.id)
              join `ugmslnr`.`wind_directions` wd on (w.wind_direction=wd.id)
            order by `date` desc 
            limit 6
          ) a
          order by date asc
          ";
          $data = get_arr($conn, $sql); 
          ?>
          <tr>
            <? foreach($data as $row){ ?>
              <td class="text-center"> <img width="75px" height="75px" class="no-border" src="<?=$row['icon']?>"></td>
            <? } ?>
          </tr>
          <tr>
            <? foreach ($data as $row){ ?>
              <td><?=$row['wind_direction']."<br>".$row['temperature']." м/с"?> </td>
            <? } ?>
          </tr>
          <tr>
            <? foreach ($data as $row){ ?>
              <td><?=$row['wind_speed'].' &deg;C'?> 
            <? } ?>
          </tr>
        </table>
        <?
        $sql = "
        select 
          date, desc_city, desc_region 
        from 
          `ugmslnr`.`weather_forecast_text` 
        order by date desc
        limit 3
        ";
        $data = get_arr($conn, $sql);
        ?>
        <? foreach($data as $row){ ?>
          <p class="day"> Прогноз на <?=format_date($row['date'])?></p>
          <p class="region"> По городу Луганск </p>
          <p class="description"> <?=$row['desc_city']?> </p>
          <p class="region"> По территории Луганской Народной Республики </p>
          <p class="description"> <?=$row['desc_region']?> </p>
        <? } ?>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
