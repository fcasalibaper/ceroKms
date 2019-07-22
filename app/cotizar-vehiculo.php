<?php
  $title = "Cotizar vehículo";
  $bajada = "Lorem lorem lorem";
  $porcentaje = 40;
?>
<!DOCTYPE html>
<head>
  <?php include("includes/head.inc.html"); ?>
</head>

<body>
  <!-- header -->
  <?php include("includes/header.inc.html"); ?>

  <section class="cotizador">
    <div class="container containerBig">
      <div class="row">
        
      <?php include("includes/menuCotizador.inc.php"); ?>

      <?php include("includes/titleSections.inc.php"); ?>

      <aside class="timeline">
        <div class="progress">

          <div class="progress-points">
            <div class="point point-1 <?php if ($porcentaje > 0) echo 'active'; ?>"></div>
            <div class="point point-2 <?php if ($porcentaje >= 50) echo 'active'; ?>"></div>
            <div class="point point-3 <?php if ($porcentaje >= 100) echo 'active'; ?>"></div>
          </div>

          <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje;?>%" aria-valuenow="<?php echo $porcentaje;?>" aria-valuemin="0" aria-valuemax="100"><span><?php echo $porcentaje;?></span></div>
        </div>
      </aside>

      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("includes/footer.inc.html"); ?>
  <?php include("includes/modalMarca.inc.php"); ?>
  <?php include("includes/scripts.inc.html"); ?>

</body>

</html>