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

  <section class="forms">
    <div class="container">
      <div class="row">
        
        <?php include("includes/menuCotizador.inc.php"); ?>

        <?php include("includes/titleSections.inc.php"); ?>

        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control falseSelect" id="marca" placeholder="Marca" data-toggle="modal" data-target="#modal" rel="open-marca" required/>
              <label for="marca">
                Marca*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control falseSelect" id="Modelo" placeholder="Seleccione modelo" data-toggle="modal" data-target="#modal" rel="open-modelo" required/>
              <label for="Modelo">
                Modelo*
              </label>
            </div>

            <div class="col">
              <input type="text" class="form-control falseSelect" id="version" placeholder="Seleccione versión" data-toggle="modal" data-target="#modal" rel="open-version" required/>
              <label for="version">
                Version*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col">
              <input type="number" class="form-control" id="RUT" placeholder="123123131" />
              <label for="RUT">
                RUT
              </label>
            </div>

            <div class="col">
              <input type="number" class="form-control" id="pie" placeholder="Ingrese monto" />
              <label for="pie">
                Pie:
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row nextForm">
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="aceptarTerminos" checked />
                <label class="form-check-label" for="aceptarTerminos">
                  Acepto los <span>términos y condiciones</span>
                </label>
              </div>
            </div>
            <div class="col col--end">
              <!-- <button class="btn btn--gradient" type="submit"><span>Siguiente</span></button> -->
              <a class="btn btn--gradient button" href="gracias.php"><span>Siguiente</span></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("includes/footer.inc.html"); ?>
  <?php include("includes/modals.inc.php"); ?>
  <?php include("includes/scripts.inc.html"); ?>

</body>

</html>