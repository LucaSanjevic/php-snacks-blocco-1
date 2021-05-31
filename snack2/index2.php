<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$word = ".";

if (strlen($name) <= 3 && strpos($mail, $word) == true && is_numeric($age)) 
{
$accesso = "Accesso Riuscito";
}
else {
    $accesso = "Accesso negato";
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
    echo $accesso
    ?>
</body>
</html>