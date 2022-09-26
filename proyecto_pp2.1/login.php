<?php
 
include('conexion.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
   
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8"/>

<!-- Bootstrap -->
<link rel ="stylesheet" href="css/bootstrap.min.css"/>
<!-- Estilos en css -->
<link rel="stylesheet"  href="css/style.css"/>
</head>

<body class="m=0 row justify-content-center text-center">      
                <!--Formulario login-->
                
            <div class="container " >
            <div class="centrado">  
                            <h1>Ingreso a Speed data System</h1>       
                    <div class="row">
                                 
     <form method="post" action="" name="signin-form" > 
     
            <div class="form-floating mb-3">
                
                <input type="text" class="form-control-lg" id="username" placeholder="Usuario" pattern="[a-zA-Z0-9]+" required autofocus>
                <div class="invalid-feedback" data-sb-feedback="username:required">Usuario is required.</div>
                
            </div>
    
            <div class="form-floating mb-3">
                <input type="password" class="form-control-lg" id="password" placeholder="Password" required>
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
            </div>
            
            <div class="btn-group-horizontal">                                  <!-- Color borde|tipo de boton| --> 
        <a href="index.php " button type="button" name="login" class=" btn btn-secondary border-dark btn-lg">Ingresar</a>
        <a href="" button type="button"  name="register"  class=" btn btn-secondary border-dark btn-lg">Registrar</a>
          </div> 
     
     </form>
            </div>
                </div>
                    </div>

                    <?php include ("footer.php") ?>
