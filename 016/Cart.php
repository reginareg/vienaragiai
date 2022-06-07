<?php

class Cart {

    public $id;
    static private $cart; 

    static public function create() {
        return self::$cart ?? self::$cart = new self; 
    }

    public function __construct(){
        $this->id = rand(1000, 9999); //singeltonas paprasciausias paternas, tam tikri principai visose kalbose spresti labiausiai papiltusoias problemas https://refactoring.guru/design-patterns/php
    }

    private function __sleep(){
        die;
        return [];
    }
    private function __wakeup(){}

}