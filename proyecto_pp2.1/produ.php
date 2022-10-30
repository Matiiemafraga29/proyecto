<?php include ("header.php") ?>
<?php include("conexion.php") ?>


  <!-- Body-->
  <meta name="viewport" content="width=device-width">
    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  


    
  <form action="produ.php" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Codigo de bolsa</label>
      <input type="text" name="Codigo_scan" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
    <?php
    if(isset($_POST['submit'])){ 
      $bolsa=$_POST["Codigo_scan"];
      $objconexion = new conexion();
      $resultado=$objconexion->consultar(
          "SELECT bolsa_id, bolsas.peso, bolsas.lote_id, materiales.codigo_sap, materiales.nombre, bolsas.estatus FROM `bolsas` 
          JOIN lotes ON lotes.lote_id=bolsas.lote_id 
          JOIN materiales ON lotes.cod_sap=materiales.codigo_sap 
          WHERE bolsas.bolsa_id=$bolsa;");
          $bolsa=$resultado[0];
            echo "
            <table class=table table-bordered border-dark>
            <tr class=table-primary>
                  <td>ID de bolsa</td><td class=table-secondary>$bolsa[0]</td>
            </tr>
            <tr class=table-primary>
                  <td>ID de lote</td><td class=table-secondary>$bolsa[2]</td>
            </tr>
            <tr class=table-primary>
                  <td>Material</td><td class=table-secondary>$bolsa[3] - $bolsa[4]</td>
            </tr>
            <tr class=table-primary>
                  <td>Peso</td><td class=table-secondary>$bolsa[1]</td>
            </tr>
            <tr class=table-primary>
                <td>Estatus</td><td class=table-secondary>$bolsa[5]</td>
            </tr>
        
           </table>";
          }
    ?>
   


  <?php include ("footer.php") ?>