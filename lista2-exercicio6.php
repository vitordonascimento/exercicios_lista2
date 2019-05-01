<?php

print "Digite três números \n\n";

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);

if ($n1 > $n2 or $n3){
    $maior = $n1;
}
else{
    $maior = $n2;
}
if ($n3 > $maior){
    $maior = $n3;
    print " O maior número é $maior";
}
else{
    print " O maior número é $maior";
}