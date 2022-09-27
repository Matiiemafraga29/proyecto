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

<body class="row justify-content-center text-center">      
                <!--Formulario login-->
                
            <div class="container " >
            <div class="centrado">  
                            <h1>Ingreso a Speed data System</h1>       
                    <div class="row">
                                 
     <form method="post" action="" name="login-form" > 
     
            <div class="form-floating mb-3">
                
                <input type="text" class="form-control-lg" id="username" placeholder="Usuario" pattern="[a-zA-Z0-9]+" required autofocus>
                <div class="invalid-feedback" data-sb-feedback="username:required">Usuario is required.</div>
                
            </div>
    
            <div class="form-floating mb-3">
                <input type="password" class="form-control-lg" id="password" placeholder="Password" required>
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
            </div>
            
            <div class="btn-group-horizontal">                                  <!-- Color borde|tipo de boton| --> 
        <input type="button" name="login" class=" btn btn-secondary border-dark btn-lg" value="Ingresar">
        
          </div> 
     
     </form>
            </div>
                </div>
                    </div>

                    <?php include ("footer.php") ?>
