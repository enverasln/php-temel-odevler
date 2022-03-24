<?php

require_once 'Sekil.php';

class Dortgen extends Sekil
{

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }



    public function alaniGetir()
    {
        return $this->a * $this->b;
    }

    public function cevreyiGetir()
    {
        return ($this->a + $this->b) * 2;
    }

}
