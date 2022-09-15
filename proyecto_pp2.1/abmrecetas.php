<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <!-- Bootstrap -->
<link rel ="stylesheet" href="css/bootstrap.min.css"/>
<!-- Estilos en css -->
<link rel="stylesheet"  href="css/estilo.css"/>
  </head>
  <body class="m=0 row justify-content-center text-center">


<!-- Barra de navegador boostrap-->
<nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark border-3 border-bottom border-primary">
  <div class="container-fluid">

   <a class="navbar-brand" href="index.php"> Speed Data</a>

      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
              <span class="navbar-toggler-icon"></span>
      </button>
  </div>

   <div id="MenuNavegacion" class="collapse navbar-collapse show ">
      <ul class="navbar-nav ms-3">
        <li class="nav-item active"><a class="nav-link" href="produ.html">Produccion</a></li>
        <li class="nav-item"><a class="nav-link" href="stock.html">stock</a></li>
        <li class="nav-item"><a class="nav-link" href="imp_etiq.html">Etiquetas</a></li>  
        <li class="nav-item"><a class="nav-link" href="recetas.html">Recetas</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link" >Cerrar Sesión</a></li>
      </ul>
   </div>
</nav>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


<!-- Footer acomodor logo falta -->
<footer>
     &copy; 2022
     <img src="img/logo.png" width="100"
       height="60">

 </footer>
  </body>
</html>