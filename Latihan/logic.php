<?php
$a = 10;
$b = 5;
$c = 7;
$d = 11;

if ($a > $c && $c == $b){
    echo "Codition AND dipenuhi<br>";
} else {
    echo "Codition AND tidak dipenuhi<br>";
}
if ($a > $c || $c == $b){
    echo "Codition OR dipenuhi<br>";
} else {
    echo "Codition OR tidak dipenuhi<br>";
}
if ($a > $c XOR $c == $b){
    echo "Codition XOR dipenuhi<br>";
} else {
    echo "Codition XOR tidak dipenuhi<br>";
}
?>