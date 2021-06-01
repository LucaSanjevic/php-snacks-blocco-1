<?php

$array = [

     '31/05/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Luca Sanjevic',
            'text' => 'giorno del esercizio corrente'
        ],

    ],

    '25/12/2020' => [
        [
            'title' => 'Post 2',
            'author' => 'Paolo Rossi',
            'text' => 'Natale in lockdown'
        ]
    ],

    '31/12/2020' => [
        [
            'title' => 'Post 3',
            'author' => 'Francesco Boccia',
            'text' => 'Capodanno in lockdown'
        ],
    ],
    
    '24/12/2012' => [
        [
            'title' => 'Post 4',
            'author' => 'Maya',
            'text' => 'Fine del mondo'
        ],

    ],
]





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

$keysMap = array_keys($array);


    for($i = 0; $i < count($array); $i++) {
$key = $keysMap[$i];
$value = $array[$key];

echo "<li>" . $key;

echo "<ul>";

for($y=0; $y< count($value); $y++) {
    $singlePost = $value[$y];

    echo "<li>";

    echo "<strong>" . $singlePost["title"] . "</strong><br>";
    echo "<em>" . $singlePost["title"] . "</em><br>";
    echo "<p>" . $singlePost["text"] . "</p><br>";
    
    

    echo "</li>";
}
echo "</ul>";
echo "</li>";

    }
            ?>
</body>

</html>