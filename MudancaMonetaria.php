<?php
    require_once 'Conta.php'; //Importando a classe para criar conta bancária;

    $Conta1 = new Conta(); //Criando o objeto Pessoa1;
    $Conta1->setNome($_GET['name']); //Dando valor ao nome;
    $Conta1->setSaldo(200.00); //Dando valor ao saldo;
    $Conta1->setDate(date("j, n, Y")); //Dando valor á data;
    $tipo=isset($_GET['tipo'])?$_GET['tipo']:null; //Dando valor ao tipo de mudança monetária;

    if($tipo==1){
        $Conta1->setSaldo(200.00)-$_GET['valor'];
    }
    else if($tipo==2){
        $Conta1->depositar($_GET['valor']);
    }
    else if($tipo==3){
        $Conta1->setSaldo(200.00)-$_GET['valor'];
    }
    
    echo $Conta1->getNome() . ", você possui R$".$Conta1->getSaldo()." em sua conta";
    echo "<br/><a href='OpcoesContaBancaria.php?name=" . $Conta1->getNome(). "'>Realizar operação</a>"
?>