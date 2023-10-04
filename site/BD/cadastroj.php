<?php

include "../php/classes.php";

$obj = new cadastroj();

$cnpj               = filter_input(INPUT_GET,"cnpj");
$nome               = filter_input(INPUT_GET,"nome");
$cep                = filter_input(INPUT_GET,"cep");
$numero             = filter_input(INPUT_GET,"numero");
$complemento        = filter_input(INPUT_GET,"complemento");
$ddd                = filter_input(INPUT_GET,"ddd");
$tel                = filter_input(INPUT_GET,"tel");
$email              = filter_input(INPUT_GET,"email");
$senha              = filter_input(INPUT_GET,"senha");

$obj->setCnpj($cnpj);
$obj->setNome($nome);
$obj->setCep($cep);
$obj->setNumero($numero);
$obj->setComplemento($complemento);
$obj->setDDD($ddd);
$obj->setTel($tel);
$obj->setEmail($email);
$obj->setSenha($senha);

echo $obj->inserir();

?>