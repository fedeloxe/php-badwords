<?php

$paragraph= $_GET['paragraph'];
$censura= $_GET['censura'];
$censored_string = str_replace($censura, '***' , $paragraph);
// echo $paragraph;
// echo $censored_string;

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
    <h1><?php echo $paragraph; ?></h1>
    <h1><?php echo  strlen ($paragraph); ?></h1>
    <h1><?php echo $censored_string; ?></h1>
    <h1><?php echo strlen ($censored_string); ?></h1>
    
</body>
</html>