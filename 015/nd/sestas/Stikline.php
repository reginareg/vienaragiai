<?php

class Stikline
{
    private $turis ;
    private $kiekis ;

    public function __construct( $t)
    {
        $this->turis = $t;
    }

    public function ipilti($k)
    {
        $tmp = $this->turis;
        if ($k > $tmp){

        $this->kiekis = $this->turis;
        }
    }
    public function ispilti(){
        $temp = $this->kiekis;
        $this->kiekis = 0;
        return $temp;
    }

    public function getKiekis()
    {
        return $this->kiekis;
    }
}