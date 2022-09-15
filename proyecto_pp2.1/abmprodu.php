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

    <?php include("conexion.php") ?>
    <?php 
    if($_POST){
        $objconexion = new conexion();
        $cantBols=$_POST['cantidad'];
        $cod_sap=$_POST['material'];
        $peso=$_POST['peso'];

        $insertar="INSERT INTO `lotes` (`lote_id`, `cantidad_bolsones`, `cod_sap`, `fecha`) VALUES (NULL, '$cantBols', '$cod_sap', current_timestamp())";
        $objconexion->ejecutar($insertar);

        $resultado=$objconexion->consultar("SELECT * FROM `lotes` ORDER BY `lotes`.`lote_id` ASC");
        $ultimoLote=end($resultado)['0'];
        $insertar="INSERT INTO `bolsas` (`bolsa_id`, `peso`, `lote_id`, `estatus`) VALUES (NULL, '$peso', '$ultimoLote', 'Deposito')";
        for($i=0;$i<$cantBols;$i++){
            $objconexion->ejecutar($insertar);
        }

    }
    

    ?>

<!-- Formulario de ejemplo-->

		<h1>MODIFICACION Y CONSULTA DE STOCK</h1>

        <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="abmprodu.php" metod="POST">
        
        
        <div class="form-floating mb-3">
            <input class="form-control" id="cantidad" type="text" placeholder="Cantidad" data-sb-validations="required" name="cantidad"/>
            <label for="cantidad">Cantidad</label>
            <div class="invalid-feedback" data-sb-feedback="cantidad:required">Cantidad is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="material" aria-label="Material" name="material">
                <!--<option value="Proveedor1">Proveedor1</option>
                <option value="Proveedor2">Proveedor2</option>
                <option value="3Proveedor">3Proveedor</option>
                <option value="4Proveedor">4Proveedor</option>
                <option value="5Proveedor">5Proveedor</option>-->
                <?php
                $objconexion = new conexion();
                $resultado=$objconexion->consultar("SELECT * FROM `materiales`");
                foreach($resultado as $mate){
                    ?> <option value="<?php echo $mate['codigo_sap']?>"> 
                    <?php echo $mate['codigo_sap']." - ".$mate['nombre'] ?></option><?php
                }
                ?>

            </select>
            <label for="material">Material</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="peso" type="text" placeholder="Peso" data-sb-validations="required" name="peso"/>
            <label for="peso">Peso</label>
            <div class="invalid-feedback" data-sb-feedback="peso:required">Peso is required.</div>
        </div>
        <!--<div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input" id="aprobado" type="checkbox" name="aprobado" />
                <label class="form-check-label" for="aprobado">Aprobado</label>
            </div>
        </div>-->
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <imput class="btn btn-primary btn-lg disabled" id="submitButton" type="submit" value="Submit">Submit</imput>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


<!-- Footer acomodor logo falta -->
<footer>
     &copy; 2022
     <img src="img/logo.png" width="100"
       height="60">

 </footer>
  </body>
</html>