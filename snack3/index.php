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
    $keyslist = array_keys($posts);

    foreach ($keyslist as $key) {

        $singleDayPosts = $posts[$key];
    
        $singleDayPosts_len = count($singleDayPosts);
    
        for ($i = 0; $i < $singleDayPosts_len; $i++) {

                <h4> echo $singleDayPosts[$i]["title"]; </h4>
                <p> echo $singleDayPosts[$i]["author"]; </p>
                <p> echo $singleDayPosts[$i]["text"]; </p>
        }
    }
            ?>
</body>

</html>