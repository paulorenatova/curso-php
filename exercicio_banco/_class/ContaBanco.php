<?php


class ContaBanco
{
    //Atributos

    public $numConta;   //Número inteiro
    protected $tipo;    //Contacorrente = CC | ContaPoupanca = CP
    private $dono;      //Nome do Dono
    private $saldo;     // Saldo da pessoa - toda vez que for abrir uma conta, abrir com saldo igual a zero
                        // Criar CC o depósito e um crédito de R$ 50,00 - Mensalidade igual a R$ 12,00
                        // Criar CP o depósito e um credito de R$150,00 - Mensalidade igual a R$ 20,00
    private $status;    // Criar conta com status F até que seja depositado.

    //Métodos

    public function ContaBanco()
    {
        $this->saldo = 0;
        $this->status = false;
    }

    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(True);
        if($this->tipo == "CC"){
            $this->setSaldo(50);
        }elseif ($this->tipo == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if($this->saldo = 0){
            $this->setStatus(False);
            echo "Sua conta pode ser fechada!";
        }elseif ($this->saldo < 0){
            echo "Seu saldo é ".$this->saldo.", e por isso não podemos fechar sua conta. <br>";
            echo "Por favor, depostite a quantia de R$ ".(0-$this->saldo)." para fechar sua conta.<br>";
        }else {
            echo "Seu saldo é ".$this->saldo.", e por isso n~;ao podemos fechar sua conta. <br>";
            echo "Por favor, saque a quantia de R$ ".$this->saldo." para fechar sua conta.<br>";
        }
    }

    public function depositar($valorDepositado)
    {
        if ($this->status == True){
            $this->saldo = $this->saldo + $valorDepositado;
            $this->setSaldo($this->saldo);
        }else{
            echo "Sua conta já foi encerrada! Assim, não você pode depositar";
        }
    }

    public function sacar($valorSaque)
    {
        if ($this->isStatus()){
            if ($valorSaque < $this->getSaldo()){
                $this->saldo = $this->saldo - $valorSaque;
                echo"Você sacou R$ ".$valorSaque . " e agora seu saldo é R$ ".$this->getSaldo() . ".<br>";
            }else {
                echo "Seu saldo é de R$ ".$this->saldo." e por isso você não pode sacar. <br>";
            }
        }else {
            echo "Sua conta está fechada e por isso você não pode sacar.<br>";
        }
    }

    public function pagarMensal()
    {
        if ($this->tipo == CC){
            $vMensal = 12;
        } else {
            $vMensal = 20;
        }
        if($this->isStatus()){
            $this->saldo = $this->getSaldo() - $vMensal;
            echo "Foi descontado R$ " . $vMensal. " da sua conta referente a mensalidade e agora seu saldo é de R$ ".$this->getSaldo() .".<br>";
        }else{
            echo "Esta conta está fechada!";
        }
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo(int $saldo)
    {
        $this->saldo = $saldo;
    }

    public function isStatus()
    {
        return $this->status;
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
    }
}