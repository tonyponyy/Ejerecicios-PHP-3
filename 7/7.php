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
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    print'El factorial de '.$numero.' es : '. $factorial; 

    ?>
</body>
</html>