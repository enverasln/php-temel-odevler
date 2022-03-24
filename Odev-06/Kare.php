<?php

require_once 'Dortgen.php';

final class Kare extends Dortgen
{

    public function __construct($a)
    {
        $this->a = $a;
        $this->b = $a;
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
