<?php

include "../php/classes.php";

$obj = new Recuperacao();

$login              = filter_input(INPUT_GET,"email");

$obj->setEmailR($login);

// var_dump($obj->rec());exit;
echo $obj->rec();
?>