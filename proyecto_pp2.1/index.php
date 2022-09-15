<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 
<link rel ="stylesheet" href="css/bootstrap.min.css"/>-->
<!-- Estilos en css -->
<link rel="stylesheet"  href="css/estilo.css"/>
</head>

<body class="row justify-content-center text-center">

<!--<nav><h1>Proyecto PP2  | Speed Data</h1></nav>-->

<!-- Barra de navegador boostrap -->
<nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark border-3 border-bottom border-primary">
            <div class="container-fluid">

             <a class="navbar-brand" href="index.php"> Speed Data</a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </div>

			       <div id="MenuNavegacion" class="collapse navbar-collapse show ">
                <ul class="navbar-nav ms-3">
                   <li class="nav-item active"><a href="login.php" class="nav-link" >Cerrar Sesión</a></li>
                </ul>
			       </div>
</nav>


<!-- MENU -->
        <div class="centrado">
                                          
<br>


       <div class="btn-group-vertical "  >                                   <!--Color borde|tipo de boton|alineacion|tamaño -->
       <a href="produ.html " button type="button" class="border-dark rounded btn btn-primary btn-block  btn-lg  mb-3">PRODUCCION</button></a>
        <a href="stock.html " button type="button" class="border-dark rounded btn btn-primary btn-block  btn-lg mb-3">STOCK</button></a>
        <a href="imp_etiq.html " button type="button" class="border-dark rounded btn btn-primary btn-block  btn-lg mb-3">IMP. DE ETIQUETAS</button></a>
        <a href="recetas.html " button type="button" class="border-dark rounded btn btn-primary btn-block  btn-lg mb-3">RECETAS</button></a>
    </div>
</div>

    
<!-- Footer acomodor logo falta -->
<footer>
     &copy; 2022
     <img src="img/logo.png" width="80"
       height="60">

 </footer>
</body>
</html>