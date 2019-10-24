<?php
include("inc/func.php");
$errorLogin = $errores = [];

$usuario = [
    "name" => "",
    "email" =>""
];

if (isset($_POST["registry"]) && $_POST["registry"] === "registrarse") {

    $usuario = [
        "name" => isset($_POST['name']) ? $_POST['name'] : null,
        "password" => isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null,
        "email" => isset($_POST['mail']) ? $_POST['mail'] : null,
        "imagen" => (isset($_FILES['image']) ? $_FILES["image"] : '')
    ];

    if (is_null($usuario["name"]) || is_null($usuario["email"])) {
        $errores[] = "Debes completar ambos campos";
    } else {

        if (strlen($_POST['name']) < 5) {
            $errores[] = "El nombre debe tener al menos 5 caracteres";
        }

        if (!filter_var($usuario['email'], FILTER_VALIDATE_EMAIL)) {
            $errores[] = "Debes ingresar un email válido";
        } else {
            $existe = existeEmail($usuario['email']);
            if($existe){
                $errores[] = "El email ya existe";
            }
        }
    }

    if (empty($errores)) {

        if (!is_null($usuario['imagen'])) {
        
            $archivoImagen = $_FILES['image'];

            $extensionImagen = pathinfo($archivoImagen['name'], PATHINFO_EXTENSION);
            $rutaImagen = 'img/avatar/' . $_POST['username'] . '.' . $extensionImagen;
            move_uploaded_file($archivoImagen['tmp_name'], $rutaImagen);

            $usuario['image'] = $rutaImagen;
        }

        $datosPuros = file_get_contents('db/usuarios.json');
        $datosEnPhp = json_decode($datosPuros, true);

        $usuario['id'] = (count($datosEnPhp['usuarios']) + 1);

        $datosEnPhp['usuarios'][] = $usuario;

        file_put_contents('db/usuarios.json', json_encode($datosEnPhp));

	    session_start();
	    $_SESSION['usuario'] = [
	        "name" => $usuario['name'],
            "email" => $usuario['email'],
            "imagen" => $usuario['imagen']
        ];

        header("Location: perfil.php");
    }
}

if (isset($_POST["login"]) && $_POST["login"] === "ingresar") {

    $mail = $_POST["mail"];
    $pass = $_POST["password"];

    if (!isset($_POST['mail']) || !isset($_POST['password'])) {
	    $errorLogin[] = "Debes completar ambos campos";
    } else {

        if (empty($_POST['mail'])) {
	        $errorLogin[] = "Debes ingresar tu email";
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
	        $errorLogin[] = "Debes ingresar un email válido";
        }

        if (empty($_POST['password'])) {
	        $errorLogin[] = "Debes completar tu contraseña";
	    }
    }

    if (empty($errorLogin)) {

        $datosPuros = file_get_contents('db/usuarios.json');
        $datosEnPhp = json_decode($datosPuros, true);

        /** VALIDAR USUARIO SI EXISTE */
        $usuari = login($mail, $pass); // TODO: esto!

	    $_SESSION['usuario'] = [
		    "name" => $usuario['name'],
		    "email" => $usuario['email'],
		    "imagen" => $usuario['imagen']
	    ];

        session_start();
        $_SESSION['usuario'] = $usuario;

        header("Location: perfil.php");
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
                            <?php
                            if(count($errores) > 0) {
                                echo "<h4>Revisa los errores:</h4>";
                                echo "<ul>";
                                foreach ($errores as $item) {
                                    echo "<li>".$item."</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                            <form action="" method="post">
                                <input type="hidden" name="registry" value="registrarse">
                                <div class="form-group">
                                    <label for="name-login">Nombre</label>
                                    <input id="name" type="text" class="form-control" name="name" value="<?=$name?>">
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Email</label>
                                    <input id="email" type="text" class="form-control" name="mail" value="<?=$mail?>">
                                </div>
                                <div class="form-group">
                                    <label for="password-login">Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="password" value="<?=$pass?>">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                    <label class="custom-file-label" for="customFileLang">Sube tu foto de perfil</label>
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
	                        <?php
	                        if(count($errorLogin) > 0) {
		                        echo "<h4>Revisa los errores:</h4>";
		                        echo "<ul>";
		                        foreach ($errorLogin as $item) {
			                        echo "<li>".$item."</li>";
		                        }
		                        echo "</ul>";
	                        }
	                        ?>
                            <form action="" method="post">
                                <input type="hidden" name="login" value="ingresar">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="mail" id="mail" type="mail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input name="password" id="password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="recordar" name="recordar" value="si">
                                        <label class="form-check-label" for="recordar">Recordar Usuario</label>
                                    </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-outlined">Ingresar <i class="fa fa-sign-in"></i></button>
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
