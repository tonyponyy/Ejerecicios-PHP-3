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
    $contraseña = $_REQUEST['contraseña'];
    $contraseñas = array(
        "contraseña1" => "Jordi",
        "contraseña2" => "Ahmed",
        "contraseña3" => "Laura",
        "contraseña4" => "Ricardo",
        "contraseña5" => "Jacobo"
    );
    print 'la contraseña pertenece a '.$contraseñas[$contraseña] ;

    ?>
</body>
</html>