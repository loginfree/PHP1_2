<?php
function avg($a, $b){
    $avg = $a + $b;
    return $avg;
}
function red($a, $b){
    $red = $a - $b;
    return $red;
}
function mul($a, $b){
    $mul = $a * $b;
    return $mul;
}
function dif($a, $b){
    $dif = $a / $b;
    return $dif;
}
echo avg( 5,6) . "<br>";
echo red( 5,6) . "<br>";
echo mul( 5,6) . "<br>";
echo dif( 5,6);
?>


