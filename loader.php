<?php

require_once("helpers.php");
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/Armador.php");
require_once("clases/BaseDato.php");
require_once("clases/BaseJson.php");
require_once("clases/Encriptar.php");
//require_once("clases/BaseMYSQL.php");
require_once("clases/Autenticador.php");
//require_once("clases/Query.php");


//Declaro mis variables
$host = "localhost";
$bd = "register";
$usuario = "root";
$password = "root";
$puerto = "3306";
$charset = "utf8mb4";
//Ojo: Para los que trabajan con MAC: deben colocar el puerto: 8889

//$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);


$validarUsuario = new Validador();
$armar = new Armador();
$jsonUsuario = new BaseJSON("usuarios.json");
Autenticador::iniciarSession();




 ?>
