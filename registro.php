<?php
$errores = [];
if($_POST){
  $usuario = [
    "name"=> $_POST["Nombre"],
    "email"=>$_POST["Email"],
    "password"=> password_hash($_POST["Password"],PASSWORD_DEFAULT)
  ];

 // Se obtiene texto plano
  $stringDesdeArchivo = file_get_contents("usuarios.json");
  // El texto plano se convierte a Php
  $usuarios = json_decode($stringDesdeArchivo, true);

    // Instrucciones, validaciones,

    // Se vuelve a guardar como texto plano
  file_put_contents("usuarios.json", json_encode($usuarios));

  $usuarioDuplicado=chequearEmailDuplicado($_POST["email"]);

  if($usuarioDuplicado){
    $errores[]="El email ya existe";
    return;
  }

}

function chequearEmailDuplicado($email){
  foreach ($usuarios as $usuario) {
    if($usuario["email"] == $email){
return true;
    }
    return false;
  }
}

if ($_POST) {
  if (strlen ($_POST['nombre']) == 0){
    echo "No llenaste el nombre <br>";
  } if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
    echo "El mail no tiene el formato correcto";
  }
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box">
                            <h2 class="text-uppercase">Nueva Cuenta</h2>
                            <p class="lead">¿Cliente no registrado aún?</p>
                            <p>Registrate con nosotros y accede a un nuevo mundo de la moda. ¡No te llevará más de un minuto!</p>
                            <p class="text-muted">Si tiene alguna pregunta, no dude en <a href="-back-template/contact.html">contactarnos</a>,
                                nuestro centro de atención al cliente está a su disposición las 24 hs.</p>
                            <hr>
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <label for="name-login">Nombre</label>
                                    <input id="name" type="text" class="form-control" name="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Email</label>
                                    <input id="email" type="text" class="form-control" name="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password-login">Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="Password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Registrarse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <h2 class="text-uppercase">Ingresar</h2>
                            <p class="lead">¿Ya sos cliente?</p>
                            <hr>
                            <form action="customer-orders.html" method="get">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Ingresar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("inc/banner-footer.php") ?>
        <?php require_once("inc/footer.php") ?>

  </body>
</html>
