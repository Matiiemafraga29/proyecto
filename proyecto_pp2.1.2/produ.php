<?php include ("header.php") ?>
<?php include("conexion.php") ?>


  <!-- Body-->
  <meta name="viewport" content="width=device-width">
    
    
  </head>

  <form action="produ.php" method="get">
    <div class="container " >
        <div class="row justify-content-md-center" >
                <div class="mb-3">
                  <label for="" class="form-label"><h2>CODIGO DE BOLSA</h2></label>
                  <input type="text" name="Codigo_scan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
          </div>
    </div>      
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Enviar</button>
  </form>


    <?php
    if(isset($_GET['submit'])){
      if($_GET['Codigo_scan']!=""){ 
        $bolsa=$_GET["Codigo_scan"];
        $objconexion = new conexion();
        $resultado=$objconexion->consultar(
          "SELECT bolsa_id, bolsas.peso, bolsas.lote_id, materiales.codigo_sap, materiales.nombre, bolsas.estatus, bolsas.soft_delate FROM `bolsas` 
          JOIN lotes ON lotes.lote_id=bolsas.lote_id 
          JOIN materiales ON lotes.cod_sap=materiales.codigo_sap 
          WHERE bolsas.bolsa_id=$bolsa;");
        if(isset ($resultado[0]) && $resultado [0] [6] == 1 ){
          $bolsa=$resultado[0];
          echo "
          <div class='container' >
            <div class='row justify-content-md-center'>
              <table class='table table-bordered border-dark'>
                <tr class=table-primary>
                  <td>ID de bolsa</td><td class=table-secondary>$bolsa[0]</td>
                </tr>
                <tr class='table-primary'>
                  <td>ID de lote</td><td class=table-secondary>$bolsa[2]</td>
                </tr>
                <tr class='table-primary'>
                  <td>Material</td><td class=table-secondary>$bolsa[3] - $bolsa[4]</td>
                </tr>
                <tr class='table-primary'>
                  <td>Peso</td><td class=table-secondary>$bolsa[1]</td>
                </tr>
                <tr class='table-primary'>
                  <td>Estatus</td><td class=table-secondary>$bolsa[5]</td>
                </tr>
              </table>
            </div>
          </div>
          <form action='produ.php?Codigo_scan=$bolsa[0]&submit=submit' method='post'>
            <div class='container'>
              <div class='row justify-content-md-center' >
                <div class='mb-3'>
                  <label for='' class='form-label'>PESO USADO</label>
                  <input type='number' name='cantidad' id='' class='form-control' placeholder='' aria-describedby='helpId'>
                </div>
              </div>
            </div>
            <input type='submit' class='btn btn-primary' name='Editar' value='Editar'>
          </form>";
          if(isset($_POST['Editar'])){
            if($_POST['cantidad']>0){
              $reta=$_POST['cantidad'];
              if($_POST['cantidad']<$bolsa[1]){
                if($bolsa[5]!='Producción'){
                  $editar="UPDATE `bolsas` SET `peso` = $bolsa[1] - $reta, `estatus` =  'Producción' 
                  WHERE `bolsas`.`bolsa_id` = $bolsa[0];";
                  $objconexion->consultar($editar);
                  header("Location: produ.php?Codigo_scan=$bolsa[0]&submit=submit");
                }else{
                  $editar="UPDATE `bolsas` SET `peso` = $bolsa[1] - $reta 
                  WHERE `bolsas`.`bolsa_id` = $bolsa[0];";
                  $objconexion->consultar($editar);
                  header("Location: produ.php?Codigo_scan=$bolsa[0]&submit=submit");
                }
              }else{
                if($_POST['cantidad']==$bolsa[1]){
                  if($bolsa[5]!='Producción'){
                    $editar="UPDATE `bolsas` SET `peso` = $bolsa[1] - $reta, `estatus` =  'Producción', `soft_delate` = 2 
                    WHERE `bolsas`.`bolsa_id` = $bolsa[0];";
                    $objconexion->consultar($editar);
                    $consulta= $objconexion->consultar("SELECT lotes.lote_id, COUNT(*) AS `Cantidad de bolsas` FROM `lotes` 
                    JOIN bolsas ON lotes.lote_id=bolsas.lote_id 
                    WHERE lotes.lote_id=$bolsa[2] && lotes.soft_delate=1 && bolsas.soft_delate=1 
                    GROUP BY bolsas.lote_id;");
                    print_r($consulta);
                    if(!isset($consulta[0])){
                      $editar="UPDATE `lotes` SET `soft_delate` = '2' WHERE `lotes`.`lote_id` = $bolsa[2];";
                      $objconexion->consultar($editar);
                    }
                    header("Location: produ.php");
                  }else{
                    $editar="UPDATE `bolsas` SET `peso` = $bolsa[1] - $reta, `soft_delate` = 2 
                    WHERE `bolsas`.`bolsa_id` = $bolsa[0];";
                    $objconexion->consultar($editar);
                    $consulta = $objconexion->consultar("SELECT lotes.lote_id, COUNT(*) AS `Cantidad de bolsas` FROM `lotes` 
                    JOIN bolsas ON lotes.lote_id=bolsas.lote_id 
                    WHERE lotes.lote_id=$bolsa[2] && lotes.soft_delate=1 && bolsas.soft_delate=1 
                    GROUP BY bolsas.lote_id;");
                    if(!isset($consulta[0])){
                      $editar="UPDATE `lotes` SET `soft_delate` = '2' WHERE `lotes`.`lote_id` = $bolsa[2];";
                      $objconexion->consultar($editar);
                    }
                    header("Location: produ.php");
                  }
                }else{
                  echo "La cantidad sobrepasa el peso de la bolsa";
                }
              }
            }else{
              echo "Numero invalido";
            }
          }
        }else{
          echo "No se encontró en la base de datos";
        }
      }
    }

    ?>

<?php include ("footer.php") ?>