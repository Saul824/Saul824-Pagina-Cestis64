
<html>
<head>
    <title> CATÁLOGO </title>
    <center>
        <br>
        <br>
        <h1 class="h1"><b><i><u> ¡AGREGA TU PROYECTO! </u></i></b></h1>
        <br>
    </center>
    <meta charset="UTF-8">
    <style type="text/css">
        .h1{
            color: #32ACED;
        }
        .table{
            background-color: #006398;
            color: #79D0FF;
            border-color: #79D0FF;
        }
         input[type=submit]{
            background-color: #05C0DE;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
         input[type=reset]{
            background-color: #05C0DE;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
        .button{
            background-color: #05C0DE;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
    </style>
</head>
<b><h2>
<body background="../img/fd.jpg">
    <center>
<table border="4px" class="table">
<th>
<form method="POST" action="productos.php">
    <br>
<div>
    NoControl Alumno: <input type="number" name="noControl"  size="14" placeholder="NC alumno" minlength="1" maxlength="14" required>
    <br>
    <br>
    NoControl Especialidad: <input type="number" name="noControlE"  size="14" placeholder="NC especialidad" minlength="1" maxlength="14" required>
    <br>
    <br>
    NoControl Proyecto: <input type="number" name="noControlP"  size="14"  placeholder="NC proyecto" minlength="1" maxlength="14" required>
    <br>
    <br>
    Nombre del Proyecto: <input type="text" name="nombre"  size="40"  placeholder="Ingrese el nombre del proyecto" minlength="1" maxlength="30" required>
    <br>
    <br>
    Materia: <input type="text" name="materia"  size="25" placeholder="Ingrese la materia" minlength="1" maxlength="15" required>
    <br>
    <br>
    Propósito: <input type="text" name="proposito"  size="50" placeholder="Ingrese el propósito breve" minlength="1" maxlength="50" required>
    <br>
    <br>
    Tiempo invertido:  <input type="time" name="tiempo" required>
    <br>
    <br>
    Fecha de Inicio: <input type="date" name="fechI" required>
    <br>
    <br>
    Fecha de Finalización: <input type="date" name="fechF" required>
    <br>
    <br>
    Costo: <input type="number" name="costo" placeholder="Ingrese el costo" required>
    <br>
    <br>
</div>

<div>
    <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
    <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
    <input type="submit" value="Actualizar" class="btn btn-info" name="btn3">
    <input type="submit" value="Eliminar" class="btn btn-danger" name="btn4">
    <br><br>
    <input type="reset" value="Borrar">
    <input type="reset" value="Limpiar">
    <a href="../index.php"><input type="button" value="Continuar" class="button"></a>
    
    <input type="button" onclick="history.back()" value="Retroceder" class="button">
</div>    
</form>
</th>
</table>     
<center>
</b></h2>


<?php


//INSERTAR

if(isset($_POST['btn1'])){ //Uso del método POST para la inserción de datos  del fomrulario cuando se oprime el botón Enviar. isset determina si una variable está definida y no es NULL.

    include("abrir_conexion.php");  //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControl = $_POST['noControl']; //Almacena todos los valores recibidos dentro de la variable noControl a la base de datos.
    $noControlE = $_POST['noControlE']; //Almacena todos los valores recibidos dentro de la variable noControlE a la base de datos.
    $noControlP = $_POST['noControlP']; //Almacena todos los valores recibidos dentro de la variable noControlP a la base de datos.
    $nombre = $_POST['nombre']; //Almacena todos los valores recibidos dentro de la variable nombre a la base de datos.
    $materia = $_POST['materia']; //Almacena todos los valores recibidos dentro de la variable materia a la base de datos.
    $proposito = $_POST['proposito']; //Almacena todos los valores recibidos dentro de la variable proposito a la base de datos.
    $tiempo = $_POST['tiempo'];//Almacena todos los valores recibidos dentro de la variable tiempo a la base de datos.
    $fechI = $_POST['fechI'];//Almacena todos los valores recibidos dentro de la variable fechI a la base de datos.
    $fechF = $_POST['fechF'];//Almacena todos los valores recibidos dentro de la variable fechF a la base de datos.
    $costo = $_POST['costo'];//Almacena todos los valores recibidos dentro de la variable costo a la base de datos.

    mysqli_query($conexion, "INSERT INTO $tabla_db3 (noControl,noControlE,noControlP,nombre,materia,proposito,tiempo,fechI,fechF,costo) values ('$noControl','$noControlE','$noControlP','$nombre','$materia','$proposito','$tiempo','$fechI','$fechF','$costo')");/*Inserta
    a la tabla seleccionada los datos y valores dentro de las variables.*/
    
   
    echo  '<script language="javascript"> alert("Se registraron los datos correctamente.");</script>';
    include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
}

//CONSULTAR

if(isset($_POST['btn2'])) //Uso del método POST para la consulta de datos  del formulario cuando se oprime el botón dos "Consultar". isset determina si una variable está definida y no es NULL.
{
    include("abrir_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControl = $_POST['noControl']; //Al digitar el número de control sólo muestre al usuario registrado con éste dato.

    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db3 where noControl = $noControl"); //Se almacena dentro de la variable resultados.  mysqli_query realiza una consulta a la base de datos.

    
    while($consulta = mysqli_fetch_array($resultados)) //La función mysqli_fetch_array obtiene una fila de resultados como un array asociativo, numérico, o ambos.
    {
        //Estructura de tabla para mostrar los datos del usuario solicitado.
        echo
        "
        <table width=\"100%\" border=\"1\">
        <tr>
        <td><b><center>NoControl</center></b></td>
        <td><b><center>NoControl Especialidad</center></b></td>
        <td><b><center>NoControl Proyecto</center></b></td>
        <td><b><center>Nombre del proyecto</center></b></td>
        <td><b><center>Materia</center></b></td>
        <td><b><center>Propósito</center></b></td>
        <td><b><center>Tiempo</center></b></td>
        <td><b><center>Fecha de inicio</center></b></td>
        <td><b><center>Fecha Final</center></b></td>
        <td><b><center>Costo</center></b></td> 
        </tr>
        <tr>
        <td>".$consulta['noControl']."</td>
        <td>".$consulta['noControlE']."</td>
        <td>".$consulta['noControlP']."</td>
        <td>".$consulta['nombre']."</td>
        <td>".$consulta['materia']."</td>
        <td>".$consulta['proposito']."</td>
        <td>".$consulta['tiempo']."</td>
        <td>".$consulta['fechI']."</td>
        <td>".$consulta['fechF']."</td>
        <td>".$consulta['costo']."</td> 
   
        </tr>
        </table>

        ";
    }  

 include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
     
}

//ACTUALIZAR
if(isset($_POST['btn3']))//Uso del método POST para la consulta de datos  del formulario cuando se oprime el botón tres "Actualizar". isset determina si una variable está definida y no es NULL.
{
    include("abrir_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControl = $_POST['noControl']; //Almacena todos los valores recibidos dentro de la variable noControl a la base de datos.
    $noControlE = $_POST['noControlE']; //Almacena todos los valores recibidos dentro de la variable noControlE a la base de datos.
    $noControlP = $_POST['noControlP']; //Almacena todos los valores recibidos dentro de la variable noControlP a la base de datos.
    $nombre = $_POST['nombre']; //Almacena todos los valores recibidos dentro de la variable nombre a la base de datos.
    $materia = $_POST['materia']; //Almacena todos los valores recibidos dentro de la variable materia a la base de datos.
    $proposito = $_POST['proposito']; //Almacena todos los valores recibidos dentro de la variable proposito a la base de datos.
    $tiempo = $_POST['tiempo'];//Almacena todos los valores recibidos dentro de la variable tiempo a la base de datos.
    $fechI = $_POST['fechI'];//Almacena todos los valores recibidos dentro de la variable fechI a la base de datos.
    $fechF = $_POST['fechF'];//Almacena todos los valores recibidos dentro de la variable fechF a la base de datos.
    $costo = $_POST['costo'];//Almacena todos los valores recibidos dentro de la variable costo a la base de datos.

    //Rectifica que los campos no se encuentren vacíos.
    if($noControl=="" || $noControlE=="" || $noControlP=="" || $nombre=="" || $materia=="" || $proposito=="" || $tiempo=="" || $fechI=="" || $fechF=="" || $costo=="")
      {
        echo '<script language="javascript"> alert("Es necesario llenar todos los datos.");</script>'; //Muestra mensaje para que el usuario llene todos los datos, en caso de no haberlo hecho.
      }
      else
      {
        //Se valida y ejecuta una consulta para saber si el dato existe.
        $datoexist=0;
        $resultados =mysqli_query($conexion,"SELECT * FROM $tabla_db3 WHERE noControl = '$noControl'");
        while($consulta = mysqli_fetch_array($resultados))
        {
            $datoexist++;
        }
        if($datoexist==0)
        {
            echo '<script language="javascript"> alert("El registro NO EXISTE.");</script>'; //Muestra mensaje en caso de que se intente actualizar un registro inexistente.
        }
        else
        {
        //Se utiliza para actualizar los registros existentes en una tabla en una base de datos MySQL.
        $_UPDATE_SQL="UPDATE $tabla_db3 Set
        noControl= '$noControl',
        noControlE= '$noControlE',
        noControlP= '$noControlP',
        nombre= '$nombre',
        materia= '$materia',
        proposito= '$proposito',
        tiempo= '$tiempo',
        fechI= '$fechI',
        fechF= '$fechF',
        costo= '$costo'
        WHERE noControl='$noControl'"; //Donde noControl de la base de datos sea igual a la variable '$noControl'. 

        mysqli_query($conexion,$_UPDATE_SQL);
        echo  '<script language="javascript"> alert("Se ha actualizado correctamente su registro.");</script>'; //Muestra mensaje de actualización ejecutada exitosamente.
        }
      }
     }

//ELIMINAR

if(isset($_POST['btn4']))//Uso del método POST para la consulta de datos  del formulario cuando se oprime el botón cuatro "Eliminar". isset determina si una variable está definida y no es NULL.
    {
    include("abrir_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".
    $noControl = $_POST['noControl']; 
    $datoexist=0;
    if($noControl=="") //Condición para verificar si la variable noControl está vacía.
    {
        echo '<script language="javascript"> alert("NECESITA LLENAR EL CAMPO.");</script>'; //Mensaje de campo vacío.
    }
    else
     {
        $resultados=mysqli_query($conexion, "SELECT * FROM $tabla_db3 WHERE noControl = '$noControl'");//Llega al registro de la tabla seleccionada por medio de la variable noControl.
        while($consulta = mysqli_fetch_array($resultados)) //Por medio de mysqli_fetch_array obtiene una fila de resultados como un array asociativo, numérico, o ambos.
        {
            $datoexist++;
        }
        if($datoexist==0)//Condición si el registro solicitado no se encuentra dentro de la base de datos y por lo tanto no existe.
        {
            echo '<script language="javascript"> alert("El registro NO EXISTE.");</script>'; //Mensaje de que el registro que se trata de consultar es inexistente. 
        }
        else
        {
            $_DELETE_SQL = "DELETE FROM $tabla_db3 WHERE noControl = '$noControl'";//Con la instrucción DELETE elimina registros de la tabla elegida donde el campo noControl ingresado para eliminar sea igual al registrado.
            mysqli_query($conexion, $_DELETE_SQL);// Envía una única consulta MySQL con la erudición de eliminar el repertorio.
            echo  '<script language="javascript"> alert("Ha eliminado un registro correctamente.");</script>'; //Muestra mensaje de eliminación ejecutada exitosamente.
        }
     }
     include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
    }
?>

    </body>
</html> 