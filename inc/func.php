<?php

function chequearEmailDuplicado($email){
    if (file_exists("db/usuarios.json")) {
        // Se obtiene texto plano
        $stringDesdeArchivo = file_get_contents("db/usuarios.json");
        // El texto plano se convierte a Php
        $usuarios = json_decode($stringDesdeArchivo, true);

        foreach ($usuarios as $usuario) {
            if ($usuario["email"] == $email) {
                return true;
            }
            return false;
        }
    }
    return false;
}

function login($email, $password){
	if (file_exists("db/usuarios.json")) {
		// Se obtiene texto plano
		$stringDesdeArchivo = file_get_contents("db/usuarios.json");
		// El texto plano se convierte a Php
		$usuarios = json_decode($stringDesdeArchivo, true);
		
		foreach ($usuarios as $usuario) {
			if ($usuario["email"] == $email) {
				return true;
			}
			return false;
		}
	} else {
		return null;
	}
	return false;
	
}