<?php
namespace Super\Old;

class Senelis {

    protected $posakis = 'VA Va Sakiau Tau';  //pasilieka seimoje tarp visu extend klasiu, jei butu private pasiliktu tik pas seneli
    
    public function pasaka() {
        echo '<h3>Senelio Konstruktorius</h3>';
    }

}

/////////////////////////
    public function __constructor() {
        echo '<h3>Seku seku pasaka apie meskena</h3>';

    }
    public static $posakis = 'VA Va Sakiau Tau';  

    public function pasaka() {
        echo '<h3>Seku seku pasaka apie meskena</h3>';
        echo '<h3>'.self::$posakis.'</h3>';
        echo '<h3>'.static::$posakis.'</h3>';
    }
    
}

