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
    $numero =$_REQUEST['numero'];
    $string_b = " ";
    while ($numero >= 1) {
     $string_b .= $numero%2;
     $numero = $numero/2;
    }  
    print strrev($string_b);


    ?>
</body>
</html>