/*1.	Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.*/

<?php

class Kibiras1 {

    protected $akmenuKiekis;

    public function prideti1Akmeni() {
        $this->akmenuKiekis ++;
    }

    public function pridetDaugAkmenu($kiekis) {
        $this->pridetDaugAkmenu +=$kiekis;
    }

    public function kiekPririnktaAkmenu() {
        echo '<br>'.$this->kiekPririnktaAkmenu.'<br>';
    }
}