layout: false
---
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function show_level($socre){
      if ($score >= 90) {
        echo "A";
      }elseif ($score >= 80) {
        echo "B";
      }
    }

    $studets = array(
      array('name' => 小明,
            'score' => 80, );
      array('name' => 小红,
            'score' => 70, );
      array('name' => 小绿,
            'score' => 60, );
          );

    foreach ($studets as $key => $value) {
      echo "<hr>";
      echo "$studets['name']";
    };


    ?>
  </body>
</html>
