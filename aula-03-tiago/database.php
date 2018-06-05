<?php

//class Database
{
    private $pdo;

    public function __construct($configuracoes)
    {
//        var_dump($configuracoes);
//        echo "Eu existo!";
        try {
            $this->pdo = new PDO(
                "mysql:host=$configuracoes[host];dbname=$configuracoes[dbname]",
                $configuracoes['user'], $configuracoes['pass']);
        } catch (Exception $e) {
            echo "Erro de conexão!<br>";
            echo $e->getMessage();
//            var_dump($e);
        }

//        $this->pdo->query('insert into pessoa (nome,sexo) values ("Tiago","Masculino")');
    }

    // Executa uma query sql (não retorna resultados)
    public function query($sql)
    {
        $this->pdo->query($sql);
    }

    // Executa uma query sql e retorna os registros
    public function get($sql)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }



}