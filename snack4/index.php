<?php

$array = [];

for ($i = 0; $i < 15; $i++) {

    $numeroRandom = rand(10,100);
    
    if (in_array($numeroRandom, $array))
      {
    
      }
    else
      {
        $array[] = $numeroRandom;
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

foreach ($array as $item){
    echo $item . '<br>';
  }
        ?>    
</body>
</html>