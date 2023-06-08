<?php

include "../php/classes.php";

$obj = new Login();

$login              = filter_input(INPUT_GET,"email");
$senha              = filter_input(INPUT_GET,"senha1");

$obj->setEmail($login);
$obj->setSenhal($senha);

// var_dump($obj->logar());exit;
echo $obj->logar();
?>