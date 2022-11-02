<?php include ("header.php") ?>

		<h2>CONSULTA DE ETIQUETAS</h2>

    <div>
      <form action="etiqueta.php" method="get" target="_blank">
        <input type="numeric" placeholder="ID de la bolsa a imprimir" name="bolsa_id">
        <button class="btn btn-primary " type="submit" value="Imprimir"> Imprimir </button>
      </form>
    </div>
  <?php include ("footer.php") ?>