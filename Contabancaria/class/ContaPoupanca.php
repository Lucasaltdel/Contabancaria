<?php
require_once('ContaBancaria.php');
class ContaPoupanca extends ContaBancaria {

    public function __construct(string $titular, float $saldo = 0){
        parent::__construct($titular, $saldo);
    }

    public function renderJuros(float $taxa): float{
        if($taxa >= 0){
            $novoSaldo = $this->getSaldo() + ($this->getSaldo() * $taxa) / 100;
            $this->setSaldo($novoSaldo);
        }
        return $this->getSaldo();
    }
}