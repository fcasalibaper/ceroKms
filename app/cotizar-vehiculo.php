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

        <!-- timeline -->
        <aside class="timeline">
          <div class="progress">

            <div class="progress-points">
              <div class="point point-1 <?php if ($porcentaje > 0) echo 'active'; ?>"></div>
              <div class="point point-2 <?php if ($porcentaje >= 50) echo 'active'; ?>"></div>
              <div class="point point-3 <?php if ($porcentaje >= 100) echo 'active'; ?>"></div>
            </div>

            <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje;?>%"
              aria-valuenow="<?php echo $porcentaje;?>" aria-valuemin="0" aria-valuemax="100">
              <span><?php echo $porcentaje;?></span></div>
          </div>
        </aside>

        <!-- finanSelected -->
        <section class="finanSelected">
          <h4>Financiación seleccionada</h4>
          <div class="finanSelected__item">
            <span class="finanSelected__item__text">
              Crédito normal
            </span>
            <span class="finanSelected__item__text">
              Monto: $1.000.000
            </span>
            <span class="finanSelected__item__text">
              12 cuotas de $2.799.807, 49
            </span>
            <a href="#" class="btn">
              Cambiar
            </a>
          </div>
        </section>

        <section class="selectorFina">
          <h4 class="title">Seleccione la financiación del monto</h4>

          <span class="selectorFina__detail">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum consequuntur, distinctio sapiente, maxime explicabo beatae voluptatibus error corporis odit quam nesciunt deserunt, incidunt doloremque atque ea ducimus neque maiores eius.
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At nisi consequatur reiciendis modi debitis aperiam itaque magnam tempora?
          </span>

          <div class="selectorFina__items">
            <div class="selectorFina__items__boxes">
              <span class="text">Su Plan</span>
              <div class="box">
                <span class="active">12 cuotas de $2.799.807,49</span>
              </div>
            </div>
            <div class="selectorFina__items__boxes">
              <span class="text">Crédito Normal</span>
              <div class="box">
                <span>12 cuotas de $2.799.807,49</span>
                <span>12 cuotas de $2.799.807,49</span>
                <span>12 cuotas de $2.799.807,49</span>
                <span>12 cuotas de $2.799.807,49</span>
              </div>
            </div>
            <div class="selectorFina__items__boxes">
              <span class="text">Crédito Inteligente</span>
              <div class="box active">
                <span>
                24/36 Cuotas
                <a href="#">Consultar ></a>
                </span>
              </div>
            </div>
          </div>
        </section>

        <button class="btn btn btn--gradient btn--alignRight">Siguiente</button>

      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("includes/footer.inc.html"); ?>
  <?php include("includes/modalMarca.inc.php"); ?>
  <?php include("includes/scripts.inc.html"); ?>

</body>

</html>