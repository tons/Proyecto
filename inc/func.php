<?php
session_start();

function existeEmail($email){
    if (file_exists("db/usuarios.json")) {
        $dbJson = file_get_contents("db/usuarios.json");
        $usuarios = json_decode($dbJson, true);

        foreach ($usuarios['usuarios'] as $item) {
	        if ($item['email'] === $email) {
		        return true;
	        }
        }
    }
    return false;
}

function login($email, $password){
	
	if(existeEmail($email)) {
		
		$dbJson = file_get_contents("db/usuarios.json");
		$usuarios = json_decode($dbJson, true);
		
		/** TODO: validar contraseña acá */
		//$usuario = $usuarios["usuarios"][];
		
		password_verify($password, $hash);
	} else {
		return null;
	}
	return false;
}

function capturaDatos($data){
	$_SESSION['nombre'] = $data['nombre'];
}

function recordarPassword($data){
	$vence = time() + 60*60*2;
	setcookie('nombre', $data['nombre'], $vence);
	setcookie('password',$data['password'], $vence);
}