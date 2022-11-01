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
    foreach($resultado as $etiqueta){
        ?><img src='http://<?php echo$_SERVER['HTTP_HOST'];?>/Proyecto_PP2/proyecto_pp2.3/librerias/phpbarcode/barcode.php?text=<?php echo $etiqueta[0];?>&size=50&print=true'><?php
        echo $etiqueta[1];
        echo $etiqueta[2];
        echo $etiqueta[3];
        echo $etiqueta[4];
        echo "<br>";
    }
    
    ?>

<!-- tabla base --> 
    <table>
        <thead>
            <tr>
                <th>Nombre del material</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Codigo <span>2856</span></td>
                <td>bolsa id</td>
            </tr>
            <tr>
                <td>fecha</td>
            </tr>
            <tr>
                <td>Peso neto</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th><b>APROBADO</b></th>
            </tr>
        </tfoot>
    </table>
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