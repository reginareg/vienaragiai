<?php

class Kibiras2
{

    public $akmenuKiekis;
    static public $akmenuKiekisVisuoseKibiruose;


    public function pridetiAkmenu($kiekis){
        $this->akmenuKiekis +=$kiekis;
        self::$akmenuKiekisVisuoseKibiruose +=$kiekis;
    }
    public function prideti1Akmeni(){
        $this->akmenuKiekis ++;
        self::$akmenuKiekisVisuoseKibiruose ++;
    }

    public function getAkmenuKiekis()
    {
        return $this->akmenuKiekis;
    }
    public function visiAkmenys(){
        return self::$akmenuKiekisVisuoseKibiruose;

    }

}