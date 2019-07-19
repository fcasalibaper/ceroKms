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
            <i></i>
            <p>Volver atrás</p>
          </span>
          <a href="#" class="btn btn--link btn--refinanciar">
            Refinancia vehículo
          </a>
        </header>

        <hgroup>
          <h1>
            Datos de contacto
            <small>Lorem ipsum dolor sit amet</small>
          </h1>
        </hgroup>

        <form class="needs-validation" novalidate>
            
          <div class="form-row">
            <div class="col">
              <textarea class="form-control" id="Mensaje" placeholder="Cuentenos en qué podemos ayudarlo por favor" rows="20" maxlength='500'></textarea>
              <label for="Mensaje">
                Mensaje
              </label>
            </div>
          </div>
          <!-- form -->

          <div class="form-row nextForm">
            <div class="col col--end">
              <button class="btn btn--gradient" type="submit"><span>¡Contactarme!</span></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- footer -->
  <!-- footer -->
  <?php include("includes/footer.inc.html"); ?>
  <?php include("includes/modalMarca.inc.html"); ?>
  <?php include("includes/scripts.inc.html"); ?>

</body>

</html>