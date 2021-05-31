<?php
	$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

   $paragrafo2 = str_replace($_GET["badword"], "***", $paragrafo);


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
<p>
<?php echo $paragrafo2 ?>
</p>

<p>
<?php echo "<br>" ?> 
</p>

<p>
<?php echo strlen($paragrafo2) ?> 
</p>


</body>
</html>