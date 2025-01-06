<?php
require_once('ContaBancaria.php');
class ContaCorrente extends ContaBancaria {

    private float $limite;

    public function __construct(string $titular, float $saldo, float $limite) {
        $this->setLimite($limite);
        parent::__construct($titular, $saldo);
    }
    public function getLimite(): float {
        return $this->limite;
    }
    public function setLimite(float $limite): void {
        if($limite >= 0){
            $this->limite = $limite;
        } else {
            $this->limite = 0;
        }
    }


    public function sacar(float $valor) {
        if($valor <= $this->limite){
            parent::sacar($valor);
            return true;
        } else {
            return false;
        }
    }
}