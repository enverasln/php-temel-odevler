<?php

$number = $_POST["number"];

function isNumberEmptyOrNull($number) {
    return $number === "" || $number === NULL;
}

function getRemain($number) {
    return $number % 3;
}

function isDivisibleByThree($number) {
    return getRemain($number) === 0;
}

function getNumberDivisibleByThree($number) {
    return 3 - getRemain($number) + $number;
}

function getResultHTML($number) {
    $html = "";
    if(isNumberEmptyOrNull($number)) {
        $html = "Sayı alanı boş bırakılamaz.<br> Hesaplama yapılabilemesi için lütfen bir sayısı giriniz.";
    }else {
        $html = "<b>Girilen Sayı: </b>" . $number . "<br>";
        if(isDivisibleByThree($number)) {
            $html .= "Girdiğiniz sayı 3'e bölünebilir.";
        } else {
            $html .= "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı " . getNumberDivisibleByThree($number) . " sayısıdır.";
        }
    }

    
    

    return $html;
}

echo getResultHTML($number);

?>