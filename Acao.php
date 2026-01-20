<?php
require_once "Pessoa.php";
class Acao extends Pessoa
{
    static public function Andar(){
        echo parent::$nome. " andou<br>";
    }

    static public function Sentar(){
        echo parent::$nome." de ". parent::$idade." anos sentou<br>";
    }

    static public function Pular(){
        echo parent::$nome." da pele ".parent::$tomPele." pulou<br>";
    }

    static public function Correr(){
        echo parent::$nome." do cabelo ".parent::$tipoCabelo." correu<br>";
    }

    static public function Piscar(){
        echo parent::$nome." dos colhos ".parent::$corOlhos." piscou";
    }
}

$acao = new Acao("Alisson", 20, "Castanhos", "Pardo", "Cacheado");

Acao::Andar();
Acao::Sentar();
Acao::Pular();
Acao::Correr();
Acao::Piscar();
?>