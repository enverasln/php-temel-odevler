<?php

require_once 'Sekil.php';

final class Ucgen extends Sekil {


    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    

    public function alaniGetir() 
    {
        $u = ($this->cevreyiGetir() / 2);
        return sqrt( $u * ($u - $this->a)* ($u - $this->b)* ($u - $this->c));
    }

    public function cevreyiGetir() 
    {
        return $this->a + $this->b + $this->c;
    }

}