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
    private $saldoCc;
    private $saldoCp;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    private $cpf;
    private $endereco;
    private $senha;

    function __construct($post=null)
    {
        if ($post) {
            $this->nome = $post["tNome"];
            $this->cpf = $post["tCpf"];
            $this->endereco = $post["tEndereco"];
            $this->senha = $post["tSenha"];
            global $db;
            $sql = "INSERT INTO cliente (nome, cpf, endereco, senha) values (:nome,:cpf,:endereco, :senha)";
            $sth = $db->prepare($sql);
            $sth->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $sth->bindParam(":cpf", $this->cpf, PDO::PARAM_STR);
            $sth->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);
            $sth->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $r = $sth->execute();
//        var_dump($r);
            if (!$r) {
                var_dump($sth->errorInfo());
            }
            $this->id = $db->lastInsertId();
        }
    }

    function updateCliente($id,$post)
    {
        $this->nome = $post["tNome"];
        $this->cpf = $post["tCpf"];
        $this->endereco = $post["tEndereco"];
        $this->senha = $post["tSenha"];
        global $db;
        $sql = "Update cliente set nome=:nome, cpf=:cpf, endereco=:endereco, senha=:senha where id=:id";
        $sth = $db->prepare($sql);
        $sth->bindParam(":id", $id, PDO::PARAM_INT);
        $sth->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $sth->bindParam(":cpf", $this->cpf, PDO::PARAM_STR);
        $sth->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);
        $sth->bindParam(":senha", $this->senha, PDO::PARAM_STR);
        $r = $sth->execute();
//        var_dump($r);
        if (!$r) {
            var_dump($sth->errorInfo());
        }
    }

    /**
     * @return ContaBanco[]
     */
    function getContas(){
        $contas = Banco::getContasCliente($this->id);
        $this->saldoCc=0;
        $this->saldoCp=0;
        foreach ($contas as $conta){
            if ($conta->getTipo() == "CC")
                $this->saldoCc = $conta->getSaldo();
            else
                $this->saldoCp = $conta->getSaldo();
        }
        return  $contas;
    }

    function getSaldoCc(){
        if ($this->saldoCc==null)
            ($this->getContas());
        return $this->saldoCc;
    }

    function getSaldoCp(){
        if ($this->saldoCp==null)
            ($this->getContas());
      return $this->saldoCp;
    }
}

