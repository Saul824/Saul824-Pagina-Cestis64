<?php

session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: ../index.php");
  exit;
}
 

require_once "config.php";
 

$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    

    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
   
    if(empty($username_err) && empty($password_err)){
        
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = $username;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            
                            session_start();
                            
                           
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            
                            header("location: ../index.php");
                        } else{
                            
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }
        
        
        mysqli_stmt_close($stmt);
    }
    
   
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
        table{
            position: absolute;
            top: 70px;
            left: 400px;
            color: #6DF3F1;
            background-color: #0D5289;
            border-color: #7BD9FF;
        }
    </style>
</head> 
<body background="../img/fond00.jpg">
    <table border="4px">
    <th>
    <div class="wrapper">
        <h1> INICIAR SESIÓN</H1>
        <h2>CETis 64</h2>
        <p>Por favor, complete sus credenciales para iniciar sesión.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Ingresar">
            </div>
            <H3><p>¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p></H3>
        </form>
    </div>
    </th>
    </table>    
</body>
</html>