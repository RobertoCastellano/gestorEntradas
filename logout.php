<?php
include_once("objeto.php");
//Si accedemos a gestion.php o entrada.php sin estar logueados nos manda a index.php
$registro->remove_cookie();
$registro->redirect("index.php");
?>