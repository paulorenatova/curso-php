<?php
/**
 * Created by PhpStorm.
 * User: Paulo - Curso
 * Date: 14/05/2018
 * Time: 20:53
 */

class Banco
{
    static public function getContas(){
        global $db;
        $sql = "select * from conta order by id";
        $sth = $db->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}