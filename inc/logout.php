<?php
session_start();
session_destroy();
setcookie("nombre", "", -1);
setcookie("password", "", -1);
header('location: registro.php');