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
        
        <header>
          <span>
            <i><-</i>
            <p>Volver atrás</p>
          </span>
          <a href="#" class="btn btn--link btn--refinanciar">
            Refinancia vehículo
          </a>
        </header>

        <hgroup>
          <h1>
            Más fácil para usted
            <small>comprá o refinancia AHORA MISMO!</small>
          </h1>
        </hgroup>

        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="RUT" placeholder="123312313" required />
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
              <input type="text" class="form-control" id="Email" placeholder="jcampos@mail.com" required />
              <label for="Email">
                Email*
              </label>
            </div>

            <div class="col">
              <input type="text" class="form-control" id="ConfirmarEmail" placeholder="jcampos@mail.com" required />
              <label for="ConfirmarEmail">
                Confirmar Email*
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="Celular" placeholder="123312313" required />
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
                  Acepto los términos y condiciones
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

  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
  <script type="text/javascript" src="scripts/ceroKms.min.js"></script>

</body>

</html>