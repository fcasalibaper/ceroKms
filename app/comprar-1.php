<?php
  $title = "Más fácil para usted";
  $bajada = "comprá o refinancia AHORA MISMO!";
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
              <input type="number" class="form-control" id="RUT" placeholder="123312313" required />
              <label for="RUT">
                RUT*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="Nombre" placeholder="Juan" required />
              <label for="Nombre">
                Nombre*
              </label>
            </div>

            <div class="col">
              <input type="text" class="form-control" id="Apellido" placeholder="Campos" required />
              <label for="Apellido">
                Apellido*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col">
              <input type="email" class="form-control" id="Email" placeholder="jcampos@mail.com" required />
              <label for="Email">
                Email*
              </label>
            </div>

            <div class="col">
              <input type="email" class="form-control" id="ConfirmarEmail" placeholder="jcampos@mail.com" required />
              <label for="ConfirmarEmail">
                Confirmar Email*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col">
              <input type="tel" class="form-control" id="Celular" placeholder="123312313" required />
              <label for="Celular">
                Celular*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row nextForm">
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="aceptarTerminos">
                <label class="form-check-label" for="aceptarTerminos">
                  Acepto los <span>términos y condiciones</span>
                </label>
              </div>
            </div>
            <div class="col col--end">
              <button class="btn btn--gradient" type="submit"><span>Siguiente</span></button>
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