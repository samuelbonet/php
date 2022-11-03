<?php
$num =rand(1,100);

echo "Antes de invocar \$num vale $num";

echo "Cuadrado del par de $num es ".calculaCuadrado($num);
echo "Despues de invocar \$num vale $num";

function calculaCuadrado(int &$num ) :int {

    //global $nombre ="samuel"; para globalizar (general)
    $num ++;
    if ($num %2!==0)
        $num ++;
    return $num * $num;


}


?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo</title>
</head>
<body>
<p>HOla</p>
</body>
</html>
