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
        array_push($vector,creaprimo());
    }
    $numero_mas_grande = 0;
    for ($i=0; $i <count($vector) ; $i++) { 
        if ($vector[$i]> $numero_mas_grande){
            $numero_mas_grande = $vector[$i];
        }
    }
    print 'El numero mas grande es el '.$numero_mas_grande;


    for ($i=0; $i <count($vector) ; $i++) { 
        print '<p>'.$vector[$i].'</p>';
    }

function creaprimo(){
    $num = 2;
    while (esprimo($num) == false) {
        $num = rand(7,1500);
    }
    return $num;
}


function esprimo($num){
 if ($num%2 !=0 and $num%3 !=0 and $num%5 !=0 and $num%7 !=0 ){
     return true;
 } else return false;

}
    ?>
</body>
</html>