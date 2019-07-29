<?php
  $title = "Cotizar vehículo";
  $bajada = "Lorem lorem lorem";
?>

<script>
  // ESTE OBJETO RECIBEN LOS PLANES, EN CADA UNO DE LOS CLICKS DE LOS MODALES "MAS INFORMACION", HAY UN ATRIBUTO data-info="0", EL NUMERO CORRESPONDE A LA POSICION DEL OBJETO CORRESPONDIENTE 
  const dataInfo = [
  {
    "Daños Propios al vehículo" :  true,
    "Daños Totales al vehículo" : true,
    "Robo, Hurto, uso no autorizado" : false,
    "Responsabilidad Civil": true,
    "Actos maliciosos": false,
    "Huelga y Terrorismo": "ufc dasda",
    "Riesgos de la Naturaleza, Granizo/Sismo": false,
    "Daños por la propia carga": false,
    "Daños a terceros por la propia carga": "lalala alala",
    "Robo de Accesorios": false,
    "Defensa Penal y Constitución de FIanza": true,
    "Deducible Responsable": true,
    "Taller de Reparación": false,
    "Auto de Reemplazo": false,
    "Asistencia al Vehículo": true,
    "Asistencia al Pasajero: Plan A y Plan B": false,
    "Daños Propios en el extranjero": true,
    "Auto de reemplazo Premium": true
  },
  {
    "Daños Propios al vehículo" :  true,
    "Daños Totales al vehículo" : true,
    "Robo, Hurto, uso no autorizado" : false,
    "Responsabilidad Civil": true,
    "Actos maliciosos": false,
    "Huelga y Terrorismo": true,
    "Riesgos de la Naturaleza, Granizo/Sismo": false,
    "Daños por la propia carga": false,
    "Daños a terceros por la propia carga": true,
    "Robo de Accesorios": false,
    "Defensa Penal y Constitución de FIanza": true,
    "Deducible Responsable": true,
    "Taller de Reparación": false,
    "Auto de Reemplazo": false,
    "Asistencia al Vehículo": true,
    "Asistencia al Pasajero: Plan A y Plan B": false,
    "Daños Propios en el extranjero": true,
    "Auto de reemplazo Premium": true
  },
  {
    "Daños Propios al vehículo" :  true,
    "Daños Totales al vehículo" : true,
    "Robo, Hurto, uso no autorizado" : false,
    "Responsabilidad Civil": true,
    "Actos maliciosos": false,
    "Huelga y Terrorismo": true,
    "Riesgos de la Naturaleza, Granizo/Sismo": false,
    "Daños por la propia carga": false,
    "Daños a terceros por la propia carga": true,
    "Robo de Accesorios": false,
    "Defensa Penal y Constitución de FIanza": true,
    "Deducible Responsable": true,
    "Taller de Reparación": false,
    "Auto de Reemplazo": false,
    "Asistencia al Vehículo": true,
    "Asistencia al Pasajero: Plan A y Plan B": false,
    "Daños Propios en el extranjero": true,
    "Auto de reemplazo Premium": true
  },
  {
    "Daños Propios al vehículo" :  true,
    "Daños Totales al vehículo" : true,
    "Robo, Hurto, uso no autorizado" : false,
    "Responsabilidad Civil": true,
    "Actos maliciosos": false,
    "Huelga y Terrorismo": true,
    "Riesgos de la Naturaleza, Granizo/Sismo": false,
    "Daños por la propia carga": false,
    "Daños a terceros por la propia carga": true,
    "Robo de Accesorios": false,
    "Defensa Penal y Constitución de FIanza": true,
    "Deducible Responsable": true,
    "Taller de Reparación": false,
    "Auto de Reemplazo": false,
    "Asistencia al Vehículo": true,
    "Asistencia al Pasajero: Plan A y Plan B": false,
    "Daños Propios en el extranjero": true,
    "Auto de reemplazo Premium": true
  }
]
</script>
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
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
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
          <h4 class="title">Seleccione la cobertura</h4>

          <div class="selectorFina__items">
            <div class="selectorFina__items__boxes">
              <span class="text">Planes</span>
              
              <div class="planes">
                <div class="plan">
                  <div class="plan__content">
                    <div class="plan__number">
                      <span>1</span>
                    </div>
                    <hgroup class="plan__title">
                      PT+RC
                      <br/><br/>
                      Precio de tu Póliza:<br/>
                      <b>
                        UF 0,30 (Valor Mensual)
                      </b>
                    </hgroup>

                    <span class="plan__body">
                      Precio sin descuento:<br/>
                      UF 0,44
                    </span>

                    <small class="plan__copy">
                      *Los valores están expresados con IVA incluido.
                    </small>

                    <a href="#" data-toggle="modal" data-target="#modalMasInfo" data-info="0" class="btn btn__link">Ver más información</a>
                    <a href="contratartest0" class="btn btn-primary">
                      Contratar
                    </a>
                  </div>
                </div>
                <div class="plan">
                  <div class="plan__content">

                    <div class="plan__number">
                      <span>2</span>
                    </div>

                    <hgroup class="plan__title">
                      Classic
                      <br><br>
                      Precio de tu Póliza: <br>
                      <b>UF 1,49 (Valor Mensual)</b>
                    </hgroup>

                    <span class="plan__body">
                    Precio sin descuento:<br>
                    UF 1,76
                    </span>

                    <small class="plan__copy">
                      *Los valores están expresados con IVA incluido.
                    </small>

                    <a href="#" data-toggle="modal" data-target="#modalMasInfo" data-info="1" class="btn btn__link">Ver más información</a>

                    <a href="contratartest1" class="btn btn-primary">
                      Contratar
                    </a>
                  </div>
                </div>
                <div class="plan">
                  <div class="plan__content">
                    <div class="plan__number">
                      <span>3</span>
                    </div>
                    <hgroup class="plan__title">
                      Full
                      <br><br>
                      Precio de tu Póliza:<br>
                      <b>UF 2,01 (Valor Mensual)</b>
                    </hgroup>

                    <span class="plan__body">
                    Precio sin descuento:<br>
                    UF 2,37
                    </span>

                    <small class="plan__copy">
                      *Los valores están expresados con IVA incluido.
                    </small>

                    <a href="#" data-toggle="modal" data-target="#modalMasInfo" data-info="2" class="btn btn__link">Ver más información</a>

                    <a href="contratartest2" class="btn btn-primary">
                      Contratar
                    </a>
                  </div>
                </div>
                <div class="plan">
                  <div class="plan__content">
                    <div class="plan__number">
                      <span>4</span>
                    </div>
                    <hgroup class="plan__title">
                      Premium
                      <br><br>
                      Precio de tu Póliza:<br>
                      <b>UF 2,51 (Valor Mensual)</b>
                    </hgroup>

                    <span class="plan__body">
                      Precio sin descuento:<br>
                      UF 2,97
                    </span>

                    <small class="plan__copy">
                      *Los valores están expresados con IVA incluido.
                    </small>

                    <a href="#" data-toggle="modal" data-target="#modalMasInfo" data-info="3" class="btn btn__link">Ver más información</a>

                    <a href="contratartest3" class="btn btn-primary">
                      Contratar
                    </a>
                  </div>
                </div>
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