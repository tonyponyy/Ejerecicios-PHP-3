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
   if ($numero%2 !=0 and $numero%3 !=0 and $numero%5 !=0 and $numero%7){
    print 'El numero '.$numero.' es primo.';
   } else print 'El numero '.$numero.' no es primo.';
        

    ?>
</body>
</html>