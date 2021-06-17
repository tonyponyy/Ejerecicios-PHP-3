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
    $acabar = $_REQUEST['acabar'];

    $vector=[];
    for ($i=0; $i <$numero ; $i++) { 
        array_push($vector,creanum(1,300));
    }

    $nuevo_vector =[];
    print 'Numeros que acaban en'.$acabar.' :';
    for ($i=0; $i <count($vector) ; $i++) { 
        if ( substr($vector[$i],-1)==$acabar ){
            array_push($nuevo_vector,$vector[$i]);
            print '<p>'.$vector[$i].'</p>';
        }
        
    }

function creanum($min,$max){
        $num = rand($min,$max);
    return $num;
}




    ?>
</body>
</html>