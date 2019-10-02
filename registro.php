<?php

$errores = [];
$name = $mail = '';

if (isset($_POST["registry"]) && $_POST["registry"] == "registrarse") {

    $nombre = $_POST["name"];
    $mail = $_POST["mail"];
    $pass = $_POST["password"];
    $image = $_FILES["image"];

    if (!isset($_POST['name']) || !isset($_POST['mail']) || !isset($_POST['password'])) {
        $errores[] = "Debes completar ambos campos";
    } else {

        if (empty($_POST['name'])) {
            $errores[] = "Debes completar el nombre";
        } else if (strlen($_POST['name']) < 5) {
            $errores[] = "El nombre debe tener al menos 5 caracteres";
        }

        if (empty($_POST['mail'])) {
            $errores[] = "Debes completar el email";
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errores[] = "Debes ingresar un email válido";
        } else {
            $existe = chequearEmailDuplicado($_POST["email"]);
            if($existe){
                $errores[] = "El email ya existe";
                return;
            }
        }
    }

    if (empty($errores)) {

        $usuario = [
            "name" => $_POST['name'],
            "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
            "email" => $_POST['mail'],
            "imagen" => $_FILES["image"]
        ];

        $archivoImagen = $_FILES['image'];

        if (isset($_FILES['image'])) {
            $extensionImagen = pathinfo($archivoImagen['name'], PATHINFO_EXTENSION);
            $rutaImagen = 'imagenes/usuarios/' . $_POST['username'] . '.' . $extensionImagen;
            move_uploaded_file(
                $archivoImagen['tmp_name'],
                $rutaImagen
            );

            $usuario['image'] = $rutaImagen;
        }

        $datosPuros = file_get_contents('usuarios.json');
        $datosEnPhp = json_decode($datosPuros, true);

        $usuario['id'] = (count($datosEnPhp['usuarios']) + 1);

        $datosEnPhp['usuarios'][] = $usuario;

        file_put_contents('usuarios.json', json_encode($datosEnPhp));


        return header("Location: index.php");
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
                            <p class="text-muted">Si tenes alguna pregunta, no dudes en <a href="-back-template/contact.html">contactarnos</a>,
                                nuestro centro de atención al cliente está a disposición las 24 hs.</p>
                            <hr>
                            <?php if(count($errores)) {
                                echo "<h3>Revise Errores:</h3><ul>";
                                foreach ($errores as $item) {
                                    echo "<li>".$item."</li>";
                                }
                                echo "<ul>";
                            } ?>
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <label for="name-login">Nombre</label>
                                    <input id="name" type="text" class="form-control" name="Nombre" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Email</label>
                                    <input id="email" type="text" class="form-control" name="Email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="password-login">Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="Password" value="">
                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFileLang">Sube tu foto de perfil</label>
                                    <input type="file" name="image" class="custom-file-input" id="image" lang="es">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="recordar usuario">
                                      <label class="form-check-label" for="gridCheck">Recordar Usuario</label>
                                    </div>
                                </div>
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
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control">
                                    <input type="text" name="email" value="<?=$email?>">
                                    <input type="text" name="password" value="<?=$password?>">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i>Ingresar</button>
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
