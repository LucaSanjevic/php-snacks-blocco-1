<?php


$partite = [
    [
        "squadraCasa" => "Varese",
        "puntifattiSC" => rand(30,100),
        "squadraOspite" => "Fortitudo",
        "puntifattiSO" => rand(30,100),

    ],
    [
        "squadraCasa" => "Milano",
        "puntifattiSC" => rand(30,100),
        "squadraOspite" => "Olimpia",
        "puntifattiSO" => rand(30,100),

    ],
    [
        "squadraCasa" => "Roma",
        "puntifattiSC" => rand(30,100),
        "squadraOspite" => "Cantu",
        "puntifattiSO" => rand(30,100),

    ],
    [
        "squadraCasa" => "Pesaro",
        "puntifattiSC" => rand(30,100),
        "squadraOspite" => "Venezia",
        "puntifattiSO" => rand(30,100),

    ],



];

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
     for ($i = 0; $i < count($partite); $i++)  {
        echo '<ul>';
        echo '<li>'; echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | ". $partite[$i]["puntifattiSC"] ." - " . $partite[$i]["puntifattiSO"];
        echo '</li>';
        echo '</ul>';
    }  
        ?>    
</body>
</html>