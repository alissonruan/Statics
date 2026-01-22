<?php
require_once "Pessoa.php";
class Acao extends Pessoa
{
    static public function Falar(){
        echo parent::$nome." falou<br>";
    }

    static public function Comer(){
        echo parent::$nome." do cabelo ".parent::$tipoCabelo." comeu<br>";
    }

    static public function Correr(){
        echo parent::$nome." de ".parent::$idade." anos correu<br>";
    }

    static public function Pular(){
        echo parent::$nome." da pele ".parent::$tomPele." pulou<br>";
    }

    static public function Piscar(){
        echo parent::$nome." dos olhos ".parent::$corOlhos." piscou";
    }
}

$acao = new Acao("Alisson", 20, "Castanhos", "Parda", "Cacheado");

Acao::Falar();
Acao::Comer();
Acao::Correr();
Acao::Pular();
Acao::Piscar();
?>