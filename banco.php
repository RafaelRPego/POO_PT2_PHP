<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace('Estudo\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

use Estudo\Banco\Modelo\Conta\Conta;
use Estudo\Banco\Modelo\Conta\Titular;
use Estudo\Banco\Modelo\Endereco;
use Estudo\Banco\Modelo\CPF;

$endereco = new Endereco('35030-678', '1527', 'Av. Erasmo Carlos', 'Bairro Santo Expedito', 'Iracema', 'MG');
$kirvara = new Titular(new Cpf ('809.178.840-19'), 'Kirvara Santos', $endereco);
$firstAccount = new Conta($kirvara);
echo $firstAccount->deposita(10000) . PHP_EOL;
echo $firstAccount->saca(200) . PHP_EOL; 
echo $firstAccount->getSaldo();
var_dump($firstAccount);

$cpfLevi = new Cpf('736.709.400-90');
$Levi = new Titular($cpfLevi, 'Levi Castro', $endereco);
$secondAccount = new Conta($Levi);
echo $secondAccount->getTitular()->getNome() . PHP_EOL;
echo $secondAccount->getTitular()->getEndereco()->getEnderecoCompleto(). PHP_EOL;
echo $secondAccount->deposita(5000) . PHP_EOL;
echo $secondAccount->saca(1000) . PHP_EOL;
echo "Saldo atual da conta {$secondAccount->getSaldo()}" . PHP_EOL;

echo 'Número de contas ativas ' . Conta::getNumeroDeContas() . PHP_EOL;

