<?php
    require_once 'ContaBancaria.php'; //Importando a classe para criar conta bancária;

    $Conta1 = new Conta(); //Criando o objeto Pessoa1;
    $Conta1->setNome($_POST['name']); //Dando valor ao nome;
    $Conta1->setSaldo(200,00); //Dando valor ao saldo;
    $Conta1->setDate(date("j, n, Y")); //Dando valor á data;
    $tipo=$_POST['tipo']; //Dando valor ao tipo de mudança monetária; 

    if($tipo==1){
        $Conta1->setSaldo(200,00)-$_POST['valor'];
    }
    else if($tipo==2){
        $Conta1->setSaldo(200,00)+$_POST['valor'];
    }
    else if($tipo==3){
        $Conta1->setSaldo(200,00)-$_POST['valor'];
    }
    
    echo "Você possui R$".getSaldo()." em sua conta";
?>