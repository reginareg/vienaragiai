<?php

class Bebras {

    public $tail = 'Long';
    private $age = 23;  //galima redaguoti tik fjos viduje, nekoreguojama is isores
    private $name, $childrens;

    public function __construct(string $n, array $c) {
        echo '<br> magic __construct <br>';
        $this->whatIsYourAge();
        $this->age = rand(10, 200);
        $this->whatIsYourAge();
        $this->name = $n;
        $this->childrens = $c;
    }

    public function __destruct() {
        echo '<br> magic visi mire <br>';
    }
    
    public function __get($what) {
        //echo '<br>' magic GET .$what.'<br>';
        //return 'Nieko nera namie';
        return $this->$what;
    }

    public function __set($where, $what) {
        echo '<br>magic SET '.$where.' '.$what.'<br>';

    }

    public function whatIsYourAge() {  //getter - f-ja kuri ka nors duoda
        echo '<br>'.(++$this->age).'<br>';
    }
    public function changeAge(int $age) {    //setter
       if ($age > 25) {
        return;
       }
        $this->age = $age;
    }



}