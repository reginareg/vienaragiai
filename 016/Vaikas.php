<?php
namespace Meska\Lokys;     //nepaveldima galioja tik sitam failui, pereina ant visu klasiu. ant Tevo siuo atveju irgi, pasistato pries varda


class Vaikas extends Tevas {
    

    public function __constructor() {
        parent::__constructor();
        echo '<h3>Vaiko konstruktorius</h3>';

    }
    //protected $posakis = 'bla bla';
    public static $posakis = 'bla bla';

    public function betvarke() {
        echo '<h3>Visiska betvarke</h3>';
    }

    public function pasaka() {
        echo '<h3>skrolinu tik toka</h3>';
        echo '<h3>'.this->$posakis.'</h3>'; 
        
      
    }

}