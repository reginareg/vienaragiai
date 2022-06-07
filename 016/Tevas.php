<?php
namespace Meska\Lokys;
use Super\Old\Senelis;
use Senelis;      //Seneliui nera namespace uzdeto, lieka koks buves

class Tevas extends Senelis{
    
    public function __constructor() {
        parent::__constructor();        //parent kreipiasi vienu lygiu i virsu
        echo '<h3>Tevo konstruktorius</h3>';

    }

    public function tvarka() {
        echo '<h3>Viskas sutvarkyte</h3>'
    }

}