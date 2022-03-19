<?php

function ucgen($size) {
    for($i = 1; $i<=$size; $i++) {
        for($j = 0; $j < $i; $j++)  {
            echo "0 ";
        }
        echo "<br>";
    }
}

ucgen(15);