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
              aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
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
          <h4 class="title">Seleccione el deducible</h4>

          <span class="selectorFina__detail">
            Al contratar este programa de financiamiento:
            <br>
            - Te bonificamos el Seguro Automotriz, según deducible escogido. La vigencia de este seguro será desde el día de entrega del vehículo, hasta el último día calendario del mes siguiente.
          </span>

          <div class="selectorFina__items">
            <div class="selectorFina__items__boxes">
              <span class="text">Elija una opción</span>
              <div class="box">
                <span class="active" data-container="body" data-toggle="popover" data-placement="bottom" data-content="lorem lorem lorem">Sin Deducible</span>
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="lorem lorem">Deducible<br>UF 3</span>
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="lorem lorem">Deducible<br>UF 5</span>
                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content="lorem lorem">Deducible<br>UF 10</span>
              </div>
            </div>
          </div>
        </section>

        <button class="btn btn--gradient btn--alignRight">Siguiente</button>

      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("includes/footer.inc.html"); ?>
  <?php include("includes/modals.inc.php"); ?>
  <?php include("includes/scripts.inc.html"); ?>

</body>

</html>