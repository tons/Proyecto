<!DOCTYPE html>
<html>
  <head>
      <?php require_once("inc/head.php") ?>
  </head>
  <body>
    <div id="all">

        <?php require_once("inc/topheader.php"); ?>

        <?php require_once("inc/breadcrums.php") ?>

        <div id="content">
            <div class="container">
                <div class="row bar">
                    <div class="col-md-9">
                        <section>
                            <p class="lead">En la sección de Preguntas Frecuentes encontrará información útil en un solo click!</p>
                            <div id="accordion" role="tablist">
                                <div class="card card-primary">
                                    <div id="headingOne" role="tab" class="card-header">
                                        <h5 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. ¿Cuánto es el tiempo estipulado de demora en el envío del producto?</a></h5>
                                    </div>
                                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                                        <div class="card-body">
                                            <p>Al contar con un servicio propio de envío en general nuestros productos llegan a cualquier punto del país en menos tiempo.</p>
                                            <ul>
                                                <li>Córdoba, Mendoza, San Luis, Buenos Aires y Santa Fe: 3 días hábiles</li>
                                                <li>Norte de Argentina: 4 días hábiles</li>
                                                <li>Sur de Argentina: 5 días hábiles</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-primary">
                                    <div id="headingTwo" role="tab" class="card-header">
                                        <h5 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">2. ¿Cómo es la política de cambios?</a></h5>
                                    </div>
                                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                                        <div class="card-body">A partir de la recepción del producto, el cliente tiene 20 días hábiles para generar el cambio, cuyo costo lo afronta VISTE.ME.</div>
                                    </div>
                                </div>
                                <div class="card card-primary">
                                    <div id="headingThree" role="tab" class="card-header">
                                        <h5 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed"> 3. ¿Realizan envíos al exterior?</a></h5>
                                    </div>
                                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                                        <div class="card-body">Desde el año 2016 realizamos envíos a todo Latinoamérica y el Caribe. Estimamos este año hacer envíos a Europa y Asia.</div>
                                    </div>
                                </div>
                                <div class="card card-primary">
                                    <div id="headingFour" role="tab" class="card-header">
                                        <h5 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">  4. ¿Cuáles son los métodos de pago aceptados?</a></h5>
                                    </div>
                                    <div id="collapseFive" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" class="collapse">
                                        <div class="card-body">
                                            <p>Es posible abonar mediante tarjetas de crédito (VISA, MASTERCARD y AMERICAN EXPRESS) y tarjetas de débito (VISA y MAESTRO).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-primary">
                                    <div id="headingFive" role="tab" class="card-header">
                                        <h5 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed"> 5. ¿Dónde se pueden efectuar reclamos?</a></h5>
                                    </div>
                                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion" class="collapse">
                                        <div class="card-body">
                                            <p>En caso que tengas algún inconveniente con tu compra, sugerencias o reclamos, no dudes en contactarte a: </p>
                                            <ul>
                                                <li>atencionalcliente@visteme.com</li>
                                                <li>reclamos@visteme.com</li>
                                                <li>consultas@visteme.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">En caso de que no haya encontrado la respuesta a su pregunta, no dude en <a href="-back-template/contact.html">contactarnos</a>, nuestro servicio de atención al cliente estará encantado de ayudarlo.</p>
                        </section>
                    </div>
                    <div class="col-sm-3">
                        <!-- PAGES MENU -->
                        
                </div>
            </div>
        </div>

        <?php require_once("inc/banner-footer.php") ?>
        <?php require_once("inc/footer.php") ?>

  </body>
</html>
