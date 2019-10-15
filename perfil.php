<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("location: registro.php");
} else {
    $usuario = [
        "nombre" => (($_SESSION["usuario"]["nombre"]) ?  : ""),
        "apellido" => (($_SESSION["usuario"]["apellido"]) ?  : ""),
        "image" => (($_SESSION["usuario"]["image"]) ?  : "")
    ];
}
?>
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
            <div id="customer-account" class="col-lg-9 clearfix">
              <p class="lead">Cambie sus datos personales o su contraseña aquí.</p>

              <div class="box mt-5">
                <div class="heading">
                  <h3 class="text-uppercase">Cambie contraseña</h3>
                </div>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_old">Contraseña anterior</label>
                        <input id="password_old" type="password" class="form-control" name="passanterior">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_1">Contraseña nueva</label>
                        <input id="password_1" type="password" class="form-control" name="nuevopass">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_2">Repita contraseña nueva</label>
                        <input id="password_2" type="password" class="form-control" name="nuevopassrep">
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined">Guardar Nueva Contraseña <i class="fa fa-save"></i></button>
                  </div>
                </form>
              </div>
              <div class="bo3">
                <div class="heading">
                  <h3 class="text-uppercase">Datos personales</h3>
                </div>
                <form name="perfil">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Nombre</label>
                        <input id="firstname" type="text" class="form-control" value="<?= $_SESSION["usuario"]["nombre"]?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input id="lastname" type="text" class="form-control" value="<?= $_SESSION["usuario"]["apellido"]?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="company">Compañía</label>
                        <input id="company" type="text" class="form-control" value="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="street">Dirección</label>
                        <input id="street" type="text" class="form-control"  value="<?= $direccion?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <label for="city">Calle</label>
                        <input id="city" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <label for="zip">Código Postal</label>
                        <input id="zip" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <label for="state">Provincia</label>
                        <select id="state" class="form-control"></select>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <label for="country">País</label>
                        <select id="country" class="form-control"></select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input id="phone" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email_account">Email</label>
                        <input id="email_account" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Guardar cambios</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Sección del Cliente</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-list"></i> Mis órdenes</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-heart"></i> Mi lista de deseos</a></li>
                    <li class="nav-item"><a href="" class="nav-link active"><i class="fa fa-user"></i> Mi cuenta</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-sign-out"></i> Salir</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <?php require_once("inc/banner-footer.php") ?>
        <?php require_once("inc/footer.php") ?>

  </body>
</html>
