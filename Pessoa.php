<?php
require_once "Acao.php";
class Pessoa
{
    static protected $nome;
    static protected $idade;
    static protected $corOlhos;
    static protected $tomPele;
    static protected $tipoCabelo;

    public function __construct($nome, $idade, $corOlhos, $tomPele, $tipoCabelo){
        self::setNome($nome);
        self::setIdade($idade);
        self::setCorOlhos($corOlhos);
        self::setTomPele($tomPele);
        self::setTipoCabelo($tipoCabelo);
    }

    static public function getNome(){
        return self::$nome;
    }

    static public function setNome($n){
        self::$nome = $n;
    }

    static public function getIdade(){
        return self::$idade;
    }

    static public function setIdade($i){
        self::$idade = $i;
    }

    static public function getCorOlhos(){
        return self::$corOlhos;
    }

    static public function setCorOlhos($co){
        self::$corOlhos = $co;
    }

    static public function getTomPele(){
        return self::$tomPele;
    }

    static public function setTomPele($tp){
        self::$tomPele = $tp;
    }

    static public function getTipoCabelo(){
        return self::$tipoCabelo;
    }

    static public function setTipoCabelo($tc){
        self::$tipoCabelo = $tc;
    }
}
?>