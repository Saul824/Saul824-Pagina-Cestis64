
<?php
//Configuración de la base de datos "bdd_proyecto."

$host = "localhost"; //Valor asignado a la base de datos.
$basededatos = "bdd_proyecto"; //Nombre de la base de datos.
$usuariodb = "root"; //Usuario de la base de datos.
$clavedb = ""; //Contraseña


$tabla_db1= "user_proyecto"; // Nombre de la base de datos asignado a $tabla_db1, es mejor asignarlo de ésta manera por la razón de que si las líneas de código aumentan sea más fácil su identificación.

error_reporting(0);//No contiene errores.

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos); //Datos de la configuración.

if ($conexion->connect_errno){ //Condición si la conexión bota un error.

	echo "No es posible la conexión"; //Mensaje de error.
	exit(); //Salida.
}



$tabla_db2= "user_ventas"; // Nombre de la base de datos asignado a $tabla_db2, es mejor asignarlo de ésta manera por la razón de que si las líneas de código aumentan sea más fácil su identificación.

error_reporting(0);//No contiene errores.

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos); //Datos de la configuración.

if ($conexion->connect_errno){ //Condición si la conexión bota un error.

	echo "No es posible la conexión"; //Mensaje de error.
	exit(); //Salida.
}

$tabla_db3= "user_catalogo"; // Nombre de la base de datos asignado a $tabla_db3, es mejor asignarlo de ésta manera por la razón de que si las líneas de código aumentan sea más fácil su identificación.

error_reporting(0);//No contiene errores.

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos); //Datos de la configuración.

if ($conexion->connect_errno){ //Condición si la conexión bota un error.

	echo "No es posible la conexión"; //Mensaje de error.
	exit(); //Salida.
}

$tabla_db4= "usuario"; // Nombre de la base de datos asignado a $tabla_db3, es mejor asignarlo de ésta manera por la razón de que si las líneas de código aumentan sea más fácil su identificación.

error_reporting(0);//No contiene errores.

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos); //Datos de la configuración.

if ($conexion->connect_errno){ //Condición si la conexión bota un error.

	echo "No es posible la conexión"; //Mensaje de error.
	exit(); //Salida.
}

?>