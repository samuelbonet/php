<?php

//VALORES
$numero1 = 50;
echo("El primer numero  es $numero1\n <br/>"); //entero

$numero2 = 50.4;
echo("El segundo numero  es $numero2\n <br/>"); //real

$numero3 = 0b1011;
echo("El tercer numero  es $numero3\n <br/>"); //binario

$numero4 = 0xFAfF4;
echo("El cuarto numero  es $numero4\n <br/>"); //hexadecimal

$numero5 = 0733353;
echo("El quinto numero  es $numero5\n <br/>"); //octal

$numero6 = 54e34;
echo("El sexto numero  es $numero6\n <br/>"); //notacion cientifica

$numero7 = 43e-10;
echo("El septimo numero  es $numero7\n <br/>"); //operaciones


//CONVERSIONES
$convertido = decbin($numero1);//convertido a binario
echo "<h1>El valor <span style='color:blue'>$numero1</span> en binario es $convertido </h1>";

$convertido = decoct($numero1);// convertido a octal
echo "<h1>El valor $numero1 en binario es $convertido </h1>";

$convertido = dechex($numero1); //convertido a hexadecimal
echo "<h1>El valor $numero1 en binario es $convertido </h1>";

printf ("<p>Valor de %d en binario es %b y caracter ascii %c</p>",$numero1,$numero1,$numero1);


//USO DE ECHO
$edad = 10;
echo("Valor de edad $edad\n <br/>");
$edad = 20;
echo("Valor de edad $edad\n <br/>");
$edad = "Maria";
echo("Valor de edad $edad\n <br/>");


//ARRAY
$v=[11,2,3,4,5,56];
echo "<hr>";
echo "57El valor del array v es ".print_r($v);
echo "<hr />"


//OBTENER EL TIPO DE VARIABLE
$variable=5;
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//entero

$variable =true;
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//booleano

$variable ="samuel";
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//string

$variable =null;
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//vacío


//CONCATENAR DOS VARIABLES
$nombre="samuel";
$apellido="bonet";
echo "<h1>Me llamo {$nombre} {$apellido}</h1>";


//DECLARACION Y USO DE CONSTANTES
const  a =1;
define ("NOMBRE2","Maria");
echo "valor  A ".a ."<br />";
echo "valor  B ".NOMBRE2."<br />";
echo "tipo  A ". gettype(a)."<br />";
echo "tipo  B ". gettype(NOMBRE2)."<br />";


//PARA SABER EN QUE RUTA ESTAS
echo "<h1>Estoy en la linea ".__LINE__." del fichero ".__FILE__." en directorio ".__DIR__."</h1>";


//GENERA UN NUMERO RANDOM Y DICE SI ES PAR O IMPAR
$numero=rand (4,8);

if ($numero %2 ==0)
    echo "Es par";
else
    echo "Es impar";
?>

<?php
function bisiesto (int $year):bool{
    $bisiesto=false;
    if (($year %4==0) && ($year%100!=0) || ($year %400==0))
    $bisiesto=true;
return $bisiesto;
}
//obtengo los valores
$dia = rand (1,33);
$mes = rand(1,13);
$year = rand (1000,2100);

$fecha = "$dia/$mes/$year";

$nombre =null;
$error = false;
switch ($mes) {
    case 1:
        if ($nombre ==null)
            $nombre="enero";
    case 3:
        if ($nombre ==null)
            $nombre="marzo";
    case 5:
        if ($nombre ==null)
            $nombre="mayo";
    case 7:
        if ($nombre ==null)
            $nombre="julio";
    case 8:
        if ($nombre ==null)
            $nombre="agosto";
    case 10:;
        if ($nombre ==null)
            $nombre="octubre";
    case 12:
        if ($dia > 31)
            $error = "Error: El mes $mes no tiene $dia, solo hasta 31";
        break;
    case 4:
        if ($nombre ==null)
            $nombre="abril";
    case 6:
        if ($nombre ==null)
            $nombre="junio";
    case 9:
        if ($nombre ==null)
            $nombre="septiembre";
    case 11:
        if ($dia > 30)
            $error = "Error: El mes $mes no tiene $dia, solo hasta 30";
        break;
    case 2:
        if (bisiesto($year) == true){
            if ($dia > 29)
                $error = "Error: El mes $mes no tiene $dia , solo hasta 29 ($year es bisiesto)";
}else
        if ($dia > 28)
            $error = "Error: El mes $mes no tiene $dia , solo hasta 28 ($year es bisiesto)";
break;
default:
    $error = "Error , un año solo tiene 12 meses y no $mes meses";
}



?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($error==false) {
    echo "La fecha $fecha es correcta";
}
else{
    echo "<h1>La fecha $fecha no es correcta</h1>";
    echo "<h1>Error encontrado $error</h1>";
}
    
$frase ="Hola";
$letra ="s";

$pos= strpos($frase , $letra);
if ($pos!==false)
    echo "Esta $letra de la frase $frase esta en la posicion $pos";
    else
        echo "No esta $letra de la frase $frase esta en la posicion $pos";
?>


</body>
</html>


-----------------------TABLA---------------------------

<?php
$tabla =rand (1,100);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border =1>
    <caption>Tabla del <?=$tabla?> </caption>

    <?php
    $contador=0;
    while ($contador < 100) {
        $resultado=$tabla * $contador;

        echo "<tr><td>$tabla</td>
            <td>*</td>
            <td>$contador</td>
            <td>". ( $tabla * $contador) ." </td>
</tr>";
    }

    ?>

>?
</body>
</html>




















