<?php

include "../php/classes.php";

$obj = new Cadastro();

$nome               = filter_input(INPUT_GET,"nome");
$cpf                = filter_input(INPUT_GET,"cpf");
$cep                = filter_input(INPUT_GET,"cep");
$tel                = filter_input(INPUT_GET,"tel");
$ddd                = filter_input(INPUT_GET,"ddd");
$nasc               = filter_input(INPUT_GET,"nasc");
$residencia         = filter_input(INPUT_GET,"numresidencial");
$complemento        = filter_input(INPUT_GET,"complemento");
$login              = filter_input(INPUT_GET,"email");
$senha              = filter_input(INPUT_GET,"senha1");

$obj->setNome($nome);
$obj->setCpf($cpf);
$obj->setCep($cep);
$obj->setTel($tel);
$obj->setDDD($ddd);
$obj->setNasc($nasc);
$obj->setResi($residencia);
$obj->setComp($complemento);
$obj->setLogin($login);
$obj->setSenha($senha);

echo $obj->inserir();
?>