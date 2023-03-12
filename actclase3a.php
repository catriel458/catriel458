<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

</head>
<body>

<?php

//Crear las siguientes paginas con codigo PHP

// 1) Una página que muestre 4 nombres de personas, la edad de cada uno, y la fecha actual


$primerNombre = "Juan"; // variables tipo string
$segundoNombre = "Martin"; 
$tercerNombre ="Julieta";
$cuartoNombre = "Catriel";

$edadJuan = 56; // variables tipo integer
$edadMartin = 52;
$edadJulieta = 18;
$edadCatriel = 25;

$fechaActual = date('d-m-Y'); // Definimos fecha actual como variable tipo Date




echo "Fecha actual:  ";
echo "<br>";
echo$fechaActual;
echo "<br>";
echo "Personas participantes: ";
echo "<br>" ;
echo "Nombre: ";
echo$primerNombre;
echo " , Edad: ";
echo$edadJuan;
echo "<br>";
echo "Nombre: ";
echo$segundoNombre;
echo " , Edad: ";
echo$edadMartin;
echo "<br>";
echo "Nombre: ";
echo$tercerNombre;
echo " , Edad: ";
echo$edadJulieta;
echo "<br>";
echo "Nombre: ";
echo$cuartoNombre;
echo " , Edad: ";
echo$edadCatriel;
echo "<br>";




?>

</body>
</html>

