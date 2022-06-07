<?php

class Stikline {

    public $turis;
    static public $gerimas = 'Pepsi';  //static yra savybe kuri nepatenka i objekta ir pasilieka klaseje, niekur neiseinanti

    public static function valio() {
        echo '<h1>VALIO</h1>';
    }

    public function __construct(){
        $this->turis = rand(100, 200);
    }

    public function kas() {
        echo '<br>--->'.self::$gerimas;   //self reiskia ta pati klase, statinis kintamasis arba Stikline tas pats butu
    }
}