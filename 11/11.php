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
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $n3 = $_REQUEST['n3'];
    $n4 = $_REQUEST['n4'];
    $n5 = $_REQUEST['n5'];
    $n6 = $_REQUEST['n6'];
    $n7 = $_REQUEST['n7'];
    $n8 = $_REQUEST['n8'];
    $n9 = $_REQUEST['n9'];
    $n10 = $_REQUEST['n10'];

   function crear_array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10){
    $vector = [$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10];
    return $vector;
   }
   function imprimir($vector){
       for ($i=0; $i <count($vector) ; $i++) { 
          print '<p>El valor '.$i.' es :'.$vector[$i].'</p>';
       }
   }
$vector_para_imprimir = crear_array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);
imprimir($vector_para_imprimir);

    ?>
</body>
</html>