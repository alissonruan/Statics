<?php
require_once "Acao.php";
class Pessoa{
    protected static $nome;
    protected static $idade;
    protected static $cabelo;
    protected static $olhos;
    protected static $pele;

    public function __construct($nome, $idade, $cabelo, $olhos, $pele){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCabelo($cabelo);
        $this->setOlhos($olhos);
        $this->setPele($pele);
    }
    
    public function getNome(){
        return self::$nome;
    }

    public function setNome($n){
        self::$nome = $n;
    }

    public function getIdade(){
        return self::$idade;
    }

    public function setIdade($i){
        self::$idade = $i;
    }

    public function getCabelo(){
        return self::$cabelo;
    }

    public function setCabelo($c){
        self::$cabelo = $c;
    }

    public function getOlhos(){
        return self::$olhos;
    }

    public function setOlhos($o){
        self::$olhos = $o;
    }

    public function getPele(){
        return self::$pele;
    }

    public function setPele($p){
        self::$pele = $p;
    }
}
?>