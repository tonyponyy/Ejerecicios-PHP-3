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
    $radio=0;$base=0;$altura=0;$lado=0;
    $operacion = $_REQUEST['operacion'];
    $radio =$_REQUEST['radio'];
    $base=$_REQUEST['base'];
    $altura=$_REQUEST['altura'];
    $lado=$_REQUEST['lado'];

    switch ($operacion) {
        case 1:
            print 'El area del circulo es '.( $radio^2)*pi();
            break;
            case 2:
                print 'El area del triangulo es '.( $base*$altura)/2;
                break;
                case 3:
                    print 'El area del cuadrado es '.($lado*$lado);
                    break;
        
    }


    ?>
</body>
</html>