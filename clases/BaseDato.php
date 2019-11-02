<?php

abstract class BaseDatos{
    abstract public function guardar(array $registro);
    abstract public function abrir();
    abstract public function borrar();
    abstract public function actualizar();
    abstract public function buscar($email);
}

 ?>
