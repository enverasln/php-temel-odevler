<?php

function ucgen($size) {
    for($i = 1; $i<=$size; $i++) {
        $j = 0;
        while($j++ < $i)  {
            echo "0 ";
        }
        echo "<br>";
    }
}

ucgen(15);