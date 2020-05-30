<html>
<head>
    <title> USUARIO </title>
    <center>
        <br>
        <br>
        <h1 class="h1"><b><i><u> USUARIO </u></i></b></h1>
        <style type="text/css">
            table{
                background-color: #680098;
                color: #08F0C2;
                border-color: #D99FFF;
            }
            .h1{
                color: #08F0C2;
            }
            input[type=submit]{
            background-color: #DE05B0;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
         input[type=reset]{
            background-color: #DE05B0;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
         .button{
            background-color: #DE05B0;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
        </style>   
    </center>
    <meta charset="UTF-8">
</head>
<b><h2>
<body background="../img/fondoo.png">
    <center>
<table border="2px">
<th>
<form method="POST" action="Formulario.php">
<br>
<div>
    NoControl Alumno: <input type="number" name="noControl"  size="14" placeholder="N&uacute;mero de control" minlength="1" maxlength="14" required>
    <br>
    <br>
    Nombre: <input type="text" name="nombre"  size="40"  placeholder="Ingrese su nombre" minlength="1" maxlength="15" required>
    <br>
    <br>
    Apellido paterno: <input type="text" name="apePat"  size="25" placeholder="Ingrese su apellido paterno" minlength="1" maxlength="25" required>
    <br>
    <br>
    Apellido materno: <input type="text" name="apeMat"  size="25" placeholder="Ingrese su apellido materno" minlength="1" maxlength="25" required>
    <br>
    <br>
    Fecha de Nacimiento: <input type="date" name="fechNac" min="1980-01-01" max="2025-12-31" required=true>
    <br>
    <br>
    G&eacute;nero: 
    <input type="radio" name="genero" value="Hombre" required=true>Hombre
    <input type="radio" name="genero" value="Mujer"  required=true>Mujer
    <br>
    <br>
    Especialidad: <input type="text" name="especialidad" placeholder="Ingrese su especialidad" minlength="1" maxlength="20" required>
    <br>
    <br>
    Semestre:
    <input type="radio" name="semestre" value="1" required=true> 1
    <input type="radio" name="semestre" value="2" required=true> 2
    <input type="radio" name="semestre" value="3" required=true> 3
    <input type="radio" name="semestre" value="4" required=true> 4
    <input type="radio" name="semestre" value="5" required=true> 5
    <input type="radio" name="semestre" value="6" required=true> 6
    <br>
    <br>
    Tel&eacute;fono: <input type="text" name="telefono"  size="20" placeholder="Digite su n&uacute;mero de tel&eacute;fono" placeholder="Digite su n&uacute;mero de tel&eacute;fono" pattern="[0-9]+"  minlength="10" maxlength="10" required>
    <br>
    <br>
    E-mail: <input type="email" name="email"  size="30" placeholder="Ingrese su e-mail" placeholder="Ingrese su e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    <br>
    <br>
</div>

<div>
    <input type="submit" value="Enviar" class="btn btn-success" name="btn1" >
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
    $nombre = $_POST['nombre']; //Almacena todos los valores recibidos dentro de la variable nombre a la base de datos.
    $apePat = $_POST['apePat']; //Almacena todos los valores recibidos dentro de la variable apePat a la base de datos.
    $apeMat = $_POST['apeMat']; //Almacena todos los valores recibidos dentro de la variable apeMat a la base de datos.
    $fechNac = $_POST['fechNac']; //Almacena todos los valores recibidos dentro de la variable fechNac a la base de datos.
    $genero = $_POST['genero']; //Almacena todos los valores recibidos dentro de la variable genero a la base de datos.
    $especialidad = $_POST['especialidad'];//Almacena todos los valores recibidos dentro de la variable especialidad a la base de datos.
    $semestre = $_POST['semestre'];//Almacena todos los valores recibidos dentro de la variable semestre a la base de datos.
    $telefono = $_POST['telefono'];//Almacena todos los valores recibidos dentro de la variable telefono a la base de datos.
    $email = $_POST['email'];//Almacena todos los valores recibidos dentro de la variable email a la base de datos.

    mysqli_query($conexion, "INSERT INTO $tabla_db1 (noControl,nombre,apePat,apeMat,fechNac,genero,especialidad,semestre,telefono,email) values ('$noControl','$nombre','$apePat','$apeMat','$fechNac','$genero','$especialidad','$semestre','$telefono','$email')");/*Inserta
    a la tabla seleccionada los datos y valores dentro de las variables.*/
    
    

    echo  '<script language="javascript"> alert("Se registraron los datos correctamente.");</script>';

    include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
    
}

//CONSULTAR

if(isset($_POST['btn2'])) //Uso del método POST para la consulta de datos  del fomrulario cuando se oprime el botón dos "Consultar". isset determina si una variable está definida y no es NULL.
{
    include("abrir_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControl = $_POST['noControl']; //Al digitar el número de control sólo muestre al usuario registrado con éste dato.

    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 where noControl = $noControl"); //Se almacena dentro de la variable resultados.  mysqli_query realiza una consulta a la base de datos.

    
    while($consulta = mysqli_fetch_array($resultados)) //La función mysqli_fetch_array obtiene una fila de resultados como un array asociativo, numérico, o ambos.
    {
        //Estructura de tabla para mostrar los datos del usuario solicitado.
        echo
        "
        <table width=\"100%\" border=\"1\">
        <tr>
        <td><b><center>NoControl</center></b></td>
        <td><b><center>Nombre</center></b></td>
        <td><b><center>Apellido paterno</center></b></td>
        <td><b><center>Apellido materno</center></b></td>
        <td><b><center>Fecha de Nacimiento</center></b></td>
        <td><b><center>Género</center></b></td>
        <td><b><center>Especialidad</center></b></td>
        <td><b><center>Semestre</center></b></td>
        <td><b><center>Teléfono</center></b></td>
        <td><b><center>E-mail</center></b></td> 
        </tr>
        <tr>
        <td>".$consulta['noControl']."</td>
        <td>".$consulta['nombre']."</td>
        <td>".$consulta['apePat']."</td>
        <td>".$consulta['apeMat']."</td>
        <td>".$consulta['fechNac']."</td>
        <td>".$consulta['genero']."</td>
        <td>".$consulta['especialidad']."</td>
        <td>".$consulta['semestre']."</td>
        <td>".$consulta['telefono']."</td> 
        <td>".$consulta['email']."</td>
        </tr>
        </table>

        ";
    }   
}

//ACTUALIZAR

if(isset($_POST['btn3']))//Uso del método POST para la consulta de datos  del formulario cuando se oprime el botón tres "Actualizar". isset determina si una variable está definida y no es NULL.
{
    include("abrir_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControl = $_POST['noControl']; //Almacena todos los valores recibidos dentro de la variable noControl a la base de datos.
    $nombre = $_POST['nombre']; //Almacena todos los valores recibidos dentro de la variable nombre a la base de datos.
    $apePat = $_POST['apePat']; //Almacena todos los valores recibidos dentro de la variable apePat a la base de datos.
    $apeMat = $_POST['apeMat']; //Almacena todos los valores recibidos dentro de la variable apeMat a la base de datos.
    $fechNac = $_POST['fechNac']; //Almacena todos los valores recibidos dentro de la variable fechNac a la base de datos.
    $genero = $_POST['genero']; //Almacena todos los valores recibidos dentro de la variable genero a la base de datos.
    $especialidad = $_POST['especialidad'];//Almacena todos los valores recibidos dentro de la variable especialidad a la base de datos.
    $semestre = $_POST['semestre'];//Almacena todos los valores recibidos dentro de la variable semestre a la base de datos.
    $telefono = $_POST['telefono'];//Almacena todos los valores recibidos dentro de la variable telefono a la base de datos.
    $email = $_POST['email'];//Almacena todos los valores recibidos dentro de la variable email a la base de datos.

    //Rectifica que los campos no se encuentren vacíos.
    if($noControl=="" || $nombre=="" || $apePat=="" || $apeMat=="" || $fechNac=="" || $genero=="" || $especialidad=="" || $semestre=="" || $telefono=="" || $email=="")
      {
        echo '<script language="javascript"> alert("Es necesario llenar todos los datos.");</script>'; //Muestra mensaje para que el usuario llene todos los datos, en caso de no haberlo hecho.
      }
      else
      {
        //Se valida y ejecuta una consulta para saber si el dato existe.
        $datoexist=0;
        $resultados =mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE noControl = '$noControl'");
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
        $_UPDATE_SQL="UPDATE $tabla_db1 Set
        noControl= '$noControl',
        nombre= '$nombre',
        apePat= '$apePat',
        apeMat= '$apeMat',
        fechNac= '$fechNac',
        genero= '$genero',
        especialidad= '$especialidad',
        semestre= '$semestre',
        telefono= '$telefono',
        email= '$email'
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
        $resultados=mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE noControl = '$noControl'");//Llega al registro de la tabla seleccionada por medio de la variable noControl.
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
            $_DELETE_SQL = "DELETE FROM $tabla_db1 WHERE noControl = '$noControl'";//Con la instrucción DELETE elimina registros de la tabla elegida donde el campo noControl ingresado para eliminar sea igual al registrado.
            mysqli_query($conexion, $_DELETE_SQL);// Envía una única consulta MySQL con la erudición de eliminar el repertorio.
            echo  '<script language="javascript"> alert("Ha eliminado un registro correctamente.");</script>'; //Muestra mensaje de eliminación ejecutada exitosamente.
        }
     }
     include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
    }

?>

    </body>
</html> 
