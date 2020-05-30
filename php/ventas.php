<html>
<head>
    <title> VENTAS </title>
    <center>
        <br>
        <br>
        <h1><b><i><u> ¿TE INTERESA ALGÚN PRODUCTO? </u></i></b></h1>
        <br>
     
    </center>
    <meta charset="UTF-8">
    <style type="text/css">
        .table{
            background-color: #FFA326;
        }
        input[type=submit]{
            background-color: #EEEB31;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
         input[type=reset]{
            background-color: #EEEB31;
            color: black;
            padding: 8px 18px;
            margin: 3px 0px;
            border: solid;
            cursor: pointer;
            width: 30%;
            border-radius:35px;
        }
        .button{
            background-color: #EEEB31;
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
<b>
<h2>
<body background="../img/cons.jpg">
    <center>
    <table border="3px" class="table">
    <th>
        <form method="POST" action="ventas.php">
            <br>
        <div> 
            NoControl Usuario: <input type="number" name="noControlE"  size="14" placeholder="NC usuario" minlength="1" maxlength="14" required>
            <br>
            <br>
            NoControl Proyecto: <input type="number" name="noControlP"  size="14"  placeholder="NC proyecto" minlength="1" maxlength="14" required>
            <br>
            <br>
            Materia: <input type="text" name="materia"  size="25" placeholder="Ingrese la materia" minlength="1" maxlength="15" required>
            <br>
            <br>
            Cantidad: <input type="number" name="cantidad"   placeholder="Ingrese la cantidad" required>
            <br>
            <br>
</div>
<br>
<div>
    <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
    <input type="submit" value="Actualizar" class="btn btn-info" name="btn3">
    <br><br>
    <input type="reset" value="Borrar">
    <input type="reset" value="Limpiar">
    <br><br>
    <a href="../index.php"><input type="button" value="Continuar" class="button"></a>
    
    <input type="button" onclick="history.back()" value="Retroceder" class="button">
  </div> 
    </th>
    </table>
    </form>
        <div>
            <img src="../img/pc4.jpg" width="350" height="150">
            <img src="../img/pc5.jpg" width="250" height="150">
            <img src="../img/pc7.jpg" width="350" height="150">
            <img src="../img/pc6.jpg" width="250" height="150">
            <img src="../img/pc3.jpg" width="250" height="150">
            <img src="../img/pc2.jpg" width="230" height="150">
        </div>
    </center>
    </b>
</h2>
<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VSPL8JEEYLZKE">
<table>

    
<tr><td><input type="hidden" name="on0" value="Proyectos">Proyectos</td></tr><tr><td><select name="os0">
    <option value="Dibujos de planos">Dibujos de planos $220.00 MXN</option>
    <option value="Planos con Software">Planos con Software $250.00 MXN</option>
    <option value="Bases de datos">Bases de datos $150.00 MXN</option>
    <option value="Pagina web">Pagina web $200.00 MXN</option>
    <option value="Comercio electronico">Comercio electronico $250.00 MXN</option>
    <option value="Ensayo con metodo cientifico">Ensayo con metodo cientifico $150.00 MXN</option>
    <option value="Ensayo de calidad de vida">Ensayo de calidad de vida $120.00 MXN</option>
    <option value="Fresado convencional">Fresado convencional $200.00 MXN</option>
    <option value="Circuito de control electromagnetico">Circuito de control electromagnetico $270.00 MXN</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="MXN">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

</center>





<?php

//INSERTAR
if(isset($_POST['btn1'])){ //Uso del método POST para la inserción de datos  del fomrulario cuando se oprime el botón Enviar. isset determina si una variable está definida y no es NULL.

    include("abrir_conexion.php");  //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControlE = $_POST['noControlE']; //Almacena todos los valores recibidos dentro de la variable noControl a la base de datos.
    $noControlP = $_POST['noControlP']; //Almacena todos los valores recibidos dentro de la variable noControlP a la base de datos.
    $materia = $_POST['materia']; //Almacena todos los valores recibidos dentro de la variable materia a la base de datos.
    $cantidad = $_POST['cantidad']; //Almacena todos los valores recibidos dentro de la variable cantidad a la base de datos.
   

    mysqli_query($conexion, "INSERT INTO $tabla_db2 (noControlE,noControlP,materia,cantidad) values ('$noControlE','$noControlP','$materia','$cantidad')");/*Inserta
    a la tabla seleccionada los datos y valores dentro de las variables.*/
    
    

    echo  '<script language="javascript"> alert("Se registraron los datos correctamente.");</script>';
    include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
    
}



//ACTUALIZAR

if(isset($_POST['btn3']))//Uso del método POST para la consulta de datos  del formulario cuando se oprime el botón tres "Actualizar". isset determina si una variable está definida y no es NULL.
{
    include("abrir_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "abrir_conexión.php".

    $noControlE = $_POST['noControlE']; //Almacena todos los valores recibidos dentro de la variable noControlE a la base de datos.
    $noControlP = $_POST['noControlP']; //Almacena todos los valores recibidos dentro de la variable noControlP a la base de datos.
    $materia = $_POST['materia']; //Almacena todos los valores recibidos dentro de la variable materia a la base de datos.
    $cantidad = $_POST['cantidad']; //Almacena todos los valores recibidos dentro de la variable cantidad a la base de datos.

    //Rectifica que los campos no se encuentren vacíos.
    if($noControlE=="" || $noControlP=="" || $materia=="" || $cantidad=="")
      {
        echo '<script language="javascript"> alert("Es necesario llenar todos los datos.");</script>'; //Muestra mensaje para que el usuario llene todos los datos, en caso de no haberlo hecho.
      }
      else
      {
        //Se valida y ejecuta una consulta para saber si el dato existe.
        $datoexist=0;
        $resultados =mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE noControlE = '$noControlE'");
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
        $_UPDATE_SQL="UPDATE $tabla_db2 Set
        noControlE= '$noControlE',
        noControlP= '$noControlP',
        materia= '$materia',
        cantidad= '$cantidad',
        WHERE noControlE='$noControlE'"; //Donde noControl de la base de datos sea igual a la variable '$noControl'. 

        mysqli_query($conexion,$_UPDATE_SQL);
        echo  '<script language="javascript"> alert("Se ha actualizado correctamente su registro.");</script>'; //Muestra mensaje de actualización ejecutada exitosamente.
        }
      }
      include("cerrar_conexion.php"); //Incluye y evalúa el archivo especificado en éste caso "cerrar_conexión.php".
     }
?>
    </body>
</html> 