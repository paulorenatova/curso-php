<?php
/**
 * Created by PhpStorm.
 * User: Paulo - Curso
 * Date: 14/05/2018
 * Time: 20:53
 */

class Banco
{


    static public function abrirConta(ContaBanco $conta)
    {
        $conta->setAtiva(True);
        if($conta->getTipo() == "CC"){
            $conta->setSaldo(50);
        }elseif ($conta->getTipo() == "CP"){
            $conta->setSaldo(150);
        }
        //Inserir registro no banco
        global $db;
        $sql = "insert into conta (tipo, id_cliente, saldo, ativa) values (:tipo, :id_cliente, :saldo, :ativa)";
        $sth = $db->prepare($sql);
        $sth->bindParam(":tipo",$conta->getTipo(), PDO::PARAM_STR);
        $sth->bindParam(":id_cliente",$conta->getIdCliente(), PDO::PARAM_STR);
        $sth->bindParam(":saldo",$conta->getSaldo(), PDO::PARAM_STR);
        $sth->bindParam(":ativa",$conta->isAtiva(), PDO::PARAM_BOOL);
        $r= $sth->execute();
//        var_dump($r);
        if (!$r){
            var_dump($sth->errorInfo());
        }
        $conta->setNumConta($db->lastInsertId());
        return $conta;
    }

    static public function getContas(){
        global $db;
        $sql = "select * from conta order by id";
        $sth = $db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_CLASS,ContaBanco);
        return $result;
    }

    static public function getClientes(){
        global $db;
        $sql = "select * from cliente order by id";
        $sth = $db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    static public function getCliente($idCliente){
        global $db;
        $sql = "select * from cliente where id = :id_cliente order by id";
        $sth = $db->prepare($sql);
        $sth->bindParam(":id_cliente",$idCliente, PDO::PARAM_INT);
        $sth->execute();

        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result;
    }


}