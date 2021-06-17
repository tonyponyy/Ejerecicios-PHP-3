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
    if ($numero <=0){
        print 'inserte numero valido';
    }else{
        print 'el numero '.$numero.' está formado por '.cuenta($numero).' digitos.';
    }
    function cuenta($n){
        $cuenta=1;
        while ($n >= 10) {
           $cuenta++;
           $n= $n/10;
        }
        return $cuenta;
    }

    ?>
</body>
</html>