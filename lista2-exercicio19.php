<?php



print "Sequência Fibonacci \n";

$n1 = 0;
$n2 = 1;
$n3 = 1;

print "$n1 ";
print "$n2 ";

while ($n3 <= 500){
    $n3 = $n1 + $n2;
    print "$n3 ";
    $n1 = $n2;
    $n2 = $n3;
}