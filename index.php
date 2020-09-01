<?php
include "calculator.php";
$cal = new Calculator();
echo "4 * 1 = ". $cal->multiply(4,1)."</br>";
echo "5 + 4 = ".$cal->add(5,4)."</br>";
echo "5 - 4 = ".$cal->subtract(5,4)."</br>";
echo "5 / 4 = ".$cal->subtract(5,4)."</br>";
?>