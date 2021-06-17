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
    $numero = $_REQUEST['numero'];

    $vector=[];
    for ($i=0; $i <$numero ; $i++) { 
        array_push($vector,creanum(0,9));
    }

    $suma = 0;
    for ($i=0; $i <count($vector) ; $i++) { 
    
            $suma += $vector[$i];
    }
    print 'La suma es de '.$suma;

    for ($i=0; $i <count($vector) ; $i++) { 
        print '<p>'.$vector[$i].'</p>';
    }

function creanum($min,$max){
        $num = rand($min,$max);
    return $num;
}

    ?>
</body>
</html>