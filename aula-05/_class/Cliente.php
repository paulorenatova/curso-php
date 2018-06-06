<?php
/**
 * Created by PhpStorm.
 * User: Paulo - Curso
 * Date: 04/06/2018
 * Time: 19:29
 */

class Cliente
{
    private $id;
    private $nome;
    private $cpf;
    private $endereco;

    function __construct($post)
    {
        $this->nome = $post["tNome"];
        $this->cpf = $post["tCpf"];
        $this->endereco = $post["tEndereco"];
        global $db;
        $sql = "INSERT INTO cliente (nome, cpf, endereco) values (:nome,:cpf,:endereco)";
        $sth = $db->prepare($sql);
        $sth->bindParam(":nome",$this->nome, PDO::PARAM_STR);
        $sth->bindParam(":cpf",$this->cpf, PDO::PARAM_STR);
        $sth->bindParam(":endereco",$this->endereco, PDO::PARAM_STR);
        $r= $sth->execute();
//        var_dump($r);
        if (!$r){
            var_dump($sth->errorInfo());
        }
        $this->id = $db->lastInsertId();
    }
}

