<?php

abstract class Sekil {

    protected $a;
    protected $b;

    function alaniGetir() {}
    function cevreyiGetir() {}


    public function __toString()
    {
        $html = "Alan: " . $this->alaniGetir() . "<br>";
        $html .= "Çevre: " . $this->cevreyiGetir() . "<br>";
        return $html;
    }
}
