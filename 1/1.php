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
    $contra = 'contraseña' ;
    $nombre = $_REQUEST['nombre'];
    $intentos =$_GET["intentos"];
    $intentos--;
    $contraseña = $_REQUEST['contraseña'];
    if ( $contra == $contraseña){
        print 'Contraseña correcta.';
    } else{

            if ($intentos == 0){
                print 'No te quedan intentos';
            }else{
        print 'Contraseña incorrecta.';
        print "Tienes $intentos intentos";
        print '
        <form method="post" action="1.php?intentos='.$intentos.'">
      <p>Inserta tu usuario :</p>
      <input type="text" name="nombre" />
      <p>Inserta tu contraseña :</p>
      <input type="password" name="contraseña" />
      <input type="submit" value="confirmar" />
        ';
    } }

    ?>
</body>
</html>