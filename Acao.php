<?php
require_once "Pessoa.php";

class Acao extends Pessoa{
    static public function Andar(){
        echo parent::$nome. " do cabelo ".parent::$cabelo. " andou<br>";
    }

    static public function Sentar(){
        echo parent::$nome. " da pele ".parent::$pele. " sentou<br>";
    }

    static public function Piscar(){
        echo parent::$nome. " dos olhos ".parent::$olhos. " piscou<br>";
    }

    static public function Correr(){
        echo parent::$nome. " de ".parent::$idade. " anos, correu<br>";
    }
}

$acao = new Acao("Alisson", 20, "Cacheado", "Castanhos", "Pardo");

Acao::Andar();
Acao::Sentar();
Acao::Piscar();
Acao::Correr()
?>