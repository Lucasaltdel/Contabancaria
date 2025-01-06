<?php
require_once('class/ContaBancaria.php');
require_once('class/ContaCorrente.php');
require_once('class/ContaPoupanca.php');

$contaCorrente01 = new ContaCorrente("Marcos antonielo", 9504, 500);
$contaPoupanca01 = new ContaPoupanca("Adolfo bonaparte", 8072);

echo "O titular {$contaCorrente01->getTitular()}, com a conta Corrente tem um saldo de R$ {$contaCorrente01->getSaldo()} </br>";

echo "O titular {$contaPoupanca01->getTitular()}, com a conta Poupança tem um saldo de R$ {$contaPoupanca01->getSaldo()} </br> </br>";

$contaCorrente01->depositar(1000);
echo "{$contaCorrente01->getTitular()} fez um deposito seu saldo atual é R$ {$contaCorrente01->getSaldo()} </br>";

$contaCorrente01->sacar(400);
echo "{$contaCorrente01->getTitular()} fez um saque, seu saldo atual é R$ {$contaCorrente01->getSaldo()} </br>";

echo "O resultado do seu saque alem do limite foi: {$contaCorrente01->sacar(532)}";


echo "<br>";
echo "<br>";

$contaPoupanca01->depositar(380);
echo "{$contaPoupanca01->getTitular()} fez um deposito, seu saldo atual é R$ {$contaPoupanca01->getSaldo()}</br>";

$contaPoupanca01->sacar(490);
echo "{$contaPoupanca01->getTitular()} fez um saque, seu saldo atual é R$ {$contaPoupanca01->getSaldo()} </br> </br>";

$contaPoupanca01->renderJuros(5);
echo "Seu saldo atual é de R$ {$contaPoupanca01->getSaldo()}";

