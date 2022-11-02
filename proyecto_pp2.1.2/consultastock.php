<?php include ("header.php") ?>
<?php include("conexion.php") ?>
<meta name="viewport" content="width=device-width">
    


    <h2>MODIFICACION Y CONSULTA DE STOCK</h2>

    <br>
    <form action="consultastock.php" methood="get">
            <select class="" id="material" aria-label="Material" name="material">
                
                <?php
                $objconexion = new conexion();
                $resultado=$objconexion->consultar("SELECT * FROM `materiales` WHERE soft_delate=1;");
                foreach($resultado as $mate){
                    ?> <option value="<?php echo $mate['codigo_sap']?>"> 
                    <?php echo $mate['codigo_sap']." - ".$mate['nombre'] ?></option><?php
                }
                ?>
            </select>
            <label for="material">Material</label>
            <input class="btn btn-primary" type="submit" name="enviar" value="Buscar">
    </form>
    <div class="container " >
        <div class="row justify-content-md-center" >
            <table class="table table-bordered border-primary">
                <thead>
                    <tr class="table-primary">
                        <th>ID de lote</th>
                        <th>Material</th>
                        <th>Cantidad de bolsas</th>
                        <th>Imprimir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_GET['enviar'])){
                            $material=$_GET["material"];
                            $objconexion = new conexion();
                            $resultado=$objconexion->consultar(
                                "SELECT lotes.lote_id, materiales.nombre, COUNT(*) AS 'Cantidad de bolsas' FROM `lotes` 
                                JOIN materiales ON lotes.cod_sap=materiales.codigo_sap 
                                JOIN bolsas ON lotes.lote_id=bolsas.lote_id 
                                WHERE lotes.cod_sap=$material && lotes.soft_delate=1 && bolsas.soft_delate=1
                                GROUP BY bolsas.lote_id;");
                            foreach($resultado as $lote){
                                echo"<tr class=table-secondary>
                                <td>$lote[0]</td>
                                <td>$lote[1]</td>
                                <td>$lote[2]</td>
                                <td><a href='etiqueta.php?lote_id=$lote[0]' target='_blank'>Imprimir etiquetas</a></td>
                            </tr>
                                ";
                            }
                            
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>    


