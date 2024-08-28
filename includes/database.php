<?php

$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

if(!$db) {
    echo 'Hubo un error';
    exit; // previene la ejecución de más codigo
}


//* Apuntar hacia las credenciales de donde quedo hospedado la base de datos
//! Siempre utiliza las funciones 'mysqli_' nunca 'mysql_', ya que son obsoletas y con vulnerabilidades
// se puede usar 'localhost' ó '127.0.0.1'
