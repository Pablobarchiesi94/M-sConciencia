<?php

$nombre=($_POST["nombre"]);
$apellido=($_POST['apellido']);
$email=($_POST['email']);
$comentario=($_POST['comentario']);

echo($nombre . " " . $apellido . " " . $email . " " . $comentario);

?>