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
                    
                    <form method="post" action="" name="signin-form">
                        <div class="form-element">
                            <label>Username</label>
                            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                        </div>
                        <div class="form-element">
                            <label>Password</label>
                            <input type="password" name="password" required />
                        </div>
                        <button type="submit" name="login" value="login">Log In</button>
                    </form>

     <!-- <form > 
     
            <div class="form-floating mb-3">
                
                <input type="text" class="form-control-lg" id="usuario" placeholder="Usuario" data-sb-validations="required"   autofocus>
                <div class="invalid-feedback" data-sb-feedback="usuario:required">Usuario is required.</div>
                
            </div>
    
            <div class="form-floating mb-3">
                <input type="password" class="form-control-lg" id="password" placeholder="Password" data-sb-validations="required">
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
            </div>
            
            <div class="btn-group-vertical">                                  <! Color borde|tipo de boton| --> 
        <!-- <a href="index.php " button type="button"  class=" btn btn-secondary border-dark btn-lg">Ingresar</a>
          </div> 
     
     </form> -->
            </div>
                </div>
                    </div>

                <!-- Footer acomodor logo falta -->  
        <footer>
        
            &copy; 2022
            <img src="img/logo.png" width="100" height="60" >
        
        </footer> 
</body>
</html>




