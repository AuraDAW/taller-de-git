<?php
<<<<<<< HEAD
// Autor: Manuel Paniagua <mpaniagua@iestrassierra.com>
require('HolaMundo.php');
<<<<<<< HEAD
print "Introduce tu nombre:";
$nombre = trim(fgets(STDINN));
@print new HolaMundo($nombre);
?>
=======

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
print new HolaMundo($nombre);
>>>>>>> b8a6e6b (Arreglado error en clase hola)
