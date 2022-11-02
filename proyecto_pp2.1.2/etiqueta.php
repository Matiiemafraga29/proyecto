<?php

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	.demo {
		border:1px solid #000000;
		border-collapse:collapse;
		padding:5px;
        width:100%;
	}
	.demo th {
		border:1px solid #000000;
		padding:5px;
		background:#FFFFFF;
        height:200px;
        font-size: 50px;
	}
	.demo td {
		border:1px solid #000000;
		padding:5px;
	}
    .titulo {
        background: #000000;
        color: #FFFFFF;
    }
    .valor {
        text-align: center;
        font-size: 20px;
    }
    p {
        font-size: 100px;
        text-align: center;
    }
    tfoot {
        text-align: center;
        font-size: 25px;
    }

</style>
</head>
<body>
    <?php
        include("conexion.php");
        $objconexion = new conexion();
        if(isset($_GET['lote_id'])){//Ingreso desde lote generado
            $lote=$_GET['lote_id'];
            $resultado=$objconexion->consultar(
                "SELECT `bolsas`.`bolsa_id`, `bolsas`.`peso`, `lotes`.`fecha`, `materiales`.`codigo_sap`, `materiales`.`nombre`
                FROM `bolsas` 
                JOIN `lotes` ON `bolsas`.`lote_id` = `lotes`.`lote_id` 
                JOIN `materiales` ON `lotes`.`cod_sap` = `materiales`.`codigo_sap`
                WHERE `lotes`.`lote_id`= $lote;");
        }else{
            if(isset($_GET['bolsa_id'])){//Ingreso desde bolsa especifica
                $bolsa=$_GET['bolsa_id'];
                $resultado=$objconexion->consultar(
                    "SELECT `bolsas`.`bolsa_id`, `bolsas`.`peso`, `lotes`.`fecha`, `materiales`.`codigo_sap`, `materiales`.`nombre`
                    FROM `bolsas` 
                    JOIN `lotes` ON `bolsas`.`lote_id` = `lotes`.`lote_id` 
                    JOIN `materiales` ON `lotes`.`cod_sap` = `materiales`.`codigo_sap`
                    WHERE `bolsas`.`bolsa_id`= $bolsa;");
            }
        }
        // En este bucle muestra cada caratula
        if(isset($resultado)){
            foreach($resultado as $etiqueta){
                ?>    
                <!-- tabla base --> 
                <table class='demo'>
                    <thead>
                        <tr>
                            <th colspan=3><?php echo $etiqueta[4];?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan=2 rowspan=6 >Codigo SAP<p><?php echo $etiqueta[3];?></p></td>
                            <td class='titulo'>BOLSA ID</td>
                        </tr>
                        <tr>
                            <td class='valor'><img src='http://<?php echo$_SERVER['HTTP_HOST'];?>/proyecto_pp2.1/librerias/phpbarcode/barcode.php?text=<?php echo $etiqueta[0];?>&size=50&print=true'></td>
                        </tr>
                        <tr>
                            <td class='titulo'>FECHA</td>
                        </tr>
                        <tr>
                            <td class='valor'><b><?php echo $etiqueta[2];?></b></td>
                        </tr>
                        <tr>
                            <td class='titulo'>PESO NETO APROX. KG</td>
                        </tr>
                        <tr>
                            <td class='valor'><b><?php echo $etiqueta[1];?></b></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=3><b>APROBADO</b></td>
                        </tr>
                    </tfoot>
                </table><?php
                
            }
        }
        
    ?>


</body>
</html>
<?php
    $html=ob_get_clean();// Pasa el HTML a una variable PHP
    require_once ('librerias\dompdf\autoload.inc.php');
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled' => true ));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    $dompdf->stream("etiqueta.pdf", array("Attachment" => false));
?>