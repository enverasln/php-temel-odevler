<pre style="font-size: 20px">
<?php
error_reporting(E_ALL);

function removeEmptyElements($arr) {

    return array_filter($arr, function ($e) {
        return $e !== "" && $e !== NULL;
    });
}

function getElementsRandomly($arr, $num = 1) {
    $keys = array_rand($arr, $num);
    $result = [];
    foreach ($keys as $key) {
        $result[] = $arr[$key];
    }

    return $result;
}


$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$cleanedArr = removeEmptyElements($planets);


print_r(getElementsRandomly($cleanedArr,2));

?>


</pre>

