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
    $euros = $_REQUEST['euros'];
    $conversion = $_REQUEST['conversion'];

function pasamoneda($euro,$tipo_conversion){
    switch ($tipo_conversion) {
        case 1:
            print $euro*129-852 .' yenes';
            break;
            case 2:
                print $euro * 0.86 .' libras';
                break;
                case 3:
                    print $euro * 1.28611 .'dolares';
                    break;
        
    }

}
    pasamoneda($euros,$conversion);


    ?>
</body>
</html>