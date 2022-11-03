<?php
$edad =rand (0,50);

if ($edad == 0) {

} elseif ($edad >= 1 && $edad <= 3 ) {
  
} elseif ($edad > 3 && $edad <= 10) {
 
}elseif ($edad >= 11 && $edad <= 17) {

}elseif ($edad >= 18 && $edad <= 26) {

}elseif ($edad >= 27 && $edad <= 59) {

}elseif ($edad >= 60 && $edad <= 80) {

}elseif ($edad >80) {

}    

switch ($edad) {
    case 0:
        echo "Tienes $edad años y eres recien nacido";
        break;
    case 1:
        echo "Tienes $edad años y eres bebe";
        break;
    case 2:
        echo "Tienes $edad años y eres niño";
        break;
    case 3:
        echo "Tienes $edad años y eres peligro";
        break;
    case 4:
        echo "Tienes $edad años y eres vive la vida";
        break;
    case 5:
        echo "Tienes $edad años y eres adulto";
        break;
    case 6:
        echo "Tienes $edad años y eres experimentado";
         break;
    case 7:
        echo "Tienes $edad añosy eres disfruta a tope";
        break;        
}





/*
$edad =rand(1,100);
switch ( $edad ) {
    case (  $edad <1):
        echo 'recien nacido';
        break;
    case (  $edad >= 1 && $edad <= 3 ):
          echo 'Bebe';
          break;
     case (  $edad > 3 && $edad <= 10 ):
          echo 'niño';
          break;
    case (  $edad >= 11 && $edad <= 17 ):
            echo 'peligro';
            break;
     case (  $edad >= 18 && $edad <= 26 ):
            echo 'vive la vida';
            break;
    case (  $edad >= 27 && $edad <= 59 ):
            echo ' adulto';
            break;      
    case (  $edad >= 60 && $edad <= 80 ):
            echo 'experimentado ';
            break;      
     case (  $edad >80 ):
             echo 'disfruta a tope';
             break;    




}*/
?>


<?php
$nombre="Samuel";    // Variable de tipo string
    $fechaNacimiento = new DateTime("2000-02-12");// Variable de tipo DateTime
    $fechaActual = new DateTime();// Variable de tipo DateTime
    $edad = $fechaActual->diff($fechaNacimiento);// Variable de tipo DateInterval
    echo  $edad->y. " años tiene $nombre";


?>

$fecha_nacimiento="10/29/2000";
$fechaActual=date(format: "d/m/Y");

$fecha_nacimiento=strtotime($fecha_nacimiento);

$anyoActual =date(format: "Y", time());
$anyoNacimiento=date(format:"Y",fecha_nacimiento);

$anyoNacimiento=date(format: "Y", $fecha_nacimiento);



$mes_actual =date (format: "m");
$mes_nacimiento=date(format: "m" , $fecha_nacimiento);

$dia_actual =date (format: "d");
$dia_nacimiento=date(format: "d" , $fecha_nacimiento);

$edad=$anyoActual-$anyoNacimiento;

if ($mes_nacimiento>$mes_actual)
    $edad--;
else{
if ($mes_nacimiento==$mes_actual)
    if ($dia_nacimiento >$dia_actual)
        $edad--;
}

setlocale(LC_ALL,"fr_FR");
$texto_fecha=strftime("%A");

for ($n=0;$n<7;$n++){
    $texto_fecha=strftime ("%A",timestamp:time() +($n *24*60*60) );
    echo "<h1>$texto_fecha</h1>";
}
