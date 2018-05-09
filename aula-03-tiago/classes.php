<?php

class Pessoa
{
    public $nome;
    public $dataNascimento;
    private $sex;

    public function getApresentacao()
    {
        $apresentacao = "Olá! Meu nome é $this->nome!";
        if ($this->sex != null)
            $apresentacao .= " Meu sexo é $this->sex.";
        return $apresentacao . "<br>";
    }

    public function apresenteSe()
    {
        echo $this->getApresentacao();
    }

    public function setSexo($sexoIn)
    {
        $sexoIn = strtolower($sexoIn);
        if ($sexoIn == "masculino" || $sexoIn == "male" || $sexoIn == "m") {
            $sexoIn = "Masculino";
        } else {
            $sexoIn = "Feminino";
        }

        $this->sex = $sexoIn;
//        echo "Sou do sexo $sexoIn.";
    }

    public function getSexo()
    {
        return $this->sex;
    }

    public function save($db)
    {
        $sql = "insert into pessoa (nome,sexo) values ('$this->nome','$this->sex')";
        $db->query($sql);
    }
}



class Curso
{
    public $titulo;
    public $ementa;

    public static function obterTodos($db)
    {
        // Obter todos os cursos
        $sql = "select * from curso";
        $cursos = $db->get($sql);
        return $cursos;
    }

    public function save($db)
    {
        $sql = "insert into curso (titulo,ementa) values ('$this->titulo','$this->ementa')";
        $db->query($sql);
    }

}