<?php //Author: Nicolas Coiado;
    class Conta{ //Criando a classe Conta;

        //Atributos:
        private $nome; //Criando atributo nome;
        private $saldo; //Criando atributo saldo;
        private $date; //Criando atributo data;
  

        //Getters e Setters:
        //Gettter e setter de Nome;
        public function getNome(){
            return $this->nome; 
        }
        public function setNome($n){
             $this->nome = $n; 
        }
        
        //Gettter e setter de Saldo;
        public function getSaldo(){
            return $this->saldo; 
        }
        public function setSaldo($s){
             $this->saldo = $s; //Colocando o saldo mínimo inicial para se abrir uma conta;
        }
        //Gettter e setter de data;
        public function getDate(){
            return $this->date; 
        }
        public function setDate($d){
             $this->date = $d; //Colocando o saldo mínimo inicial para se abrir uma conta;
        }
        public function depositar($valorDeposito){
            $novoSaldo = $this->getSaldo() + $valorDeposito;
            return $this->setSaldo($novoSaldo);
        }
    }
    //header("Location: OpcoesContaBancaria.php"); //Redirecionando o usuário para as opções de saldo;
?>