<?php
  $title = "Cotizar vehículo";
  $bajada = "Lorem lorem lorem";
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
              <div class="point point1"></div>
              <div class="point point2"></div>
              <div class="point point3"></div>
            </div>

            <div class="progress-bar"
              role="progressbar" 
              aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
              <span></span></div>
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
                <span class="active" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">12 cuotas de $2.799.807,49</span>
              </div>
            </div>
            <div class="selectorFina__items__boxes">
              <span class="text">Crédito Normal</span>
              <div class="box">
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">12 cuotas de $2.799.807,49</span>
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">12 cuotas de $2.799.807,49</span>
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">12 cuotas de $2.799.807,49</span>
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">12 cuotas de $2.799.807,49</span>
              </div>
            </div>
            <div class="selectorFina__items__boxes">
              <span class="text">Crédito Inteligente</span>
              <div class="box active">
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
                24/36 Cuotas
                <a href="#">Consultar ></a>
                </span>
              </div>
            </div>
          </div>
        </section>

        <!-- <button class="btn btn--gradient btn--alignRight">Siguiente</button> -->
        <a href="cotizar-vehiculo-2.php" class="btn btn--gradient button" href=""><span>Siguiente</span></a>

      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("includes/footer.inc.html"); ?>
  <?php include("includes/modals.inc.php"); ?>
  <?php include("includes/scripts.inc.html"); ?>

</body>

</html>