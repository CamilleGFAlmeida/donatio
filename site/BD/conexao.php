<?php
    $provedor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'donatio';

    try
    {
        $conexao = new PDO("mysql:host=$provedor; dbname=$banco","$usuario","$senha");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    }
    catch (PDOException $erro)
    {
        echo "Erro na conexão:" . $erro->getMessage();
    }
?>