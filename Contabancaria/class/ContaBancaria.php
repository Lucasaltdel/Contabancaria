<?php
 class ContaBancaria {

    private string $titular;
    private float $saldo = 0;

    public function __construct(string $titular, float $saldo) {
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }
    public function getTitular(): string {
        return $this->titular;
    }


    public function setTitular(string $titular): void {
        if($titular != ""){
            $this->titular = $titular;
        } else{
            $this->titular = "Titular";
        }
    }


    public function getSaldo(): float {
        return $this->saldo;
    }
    public function setSaldo(float $saldo): void {
        if($saldo >= 0){
            $this->saldo = $saldo;
        } else{
            $this->saldo = 0;
        }
    }
    public function depositar(float $valor): void {
        if($valor >= 0){
            $this->saldo += $valor;
        } else {
            $this->saldo += 0;
        }
    }

    public function sacar(float $valor) {
        if($valor >= 0 || $valor <= $this->saldo){
            $this->saldo -= $valor;
            return true;
        } else {
            $this->saldo += 0;
            return false;
        }
    }
 }