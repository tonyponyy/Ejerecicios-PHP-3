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
    $valor_minimo = $_REQUEST['vmi'];
    $valor_maximo = $_REQUEST['vmx'];
    $numero = $_REQUEST['num'];
    for ($i=0; $i <$numero ; $i++) { 
        print aleatorio($valor_minimo,$valor_maximo);
    }
    
    function aleatorio($mi,$ma){
      print  rand($mi,$ma)."<br>";
    }

    ?>
</body>
</html>