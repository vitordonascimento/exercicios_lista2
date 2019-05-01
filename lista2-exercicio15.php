<?php

print "Digite cinco números : \n\n";

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);
$n4 = (int) fgets (STDIN);
$n5 = (int) fgets (STDIN);

$array = array($n1, $n2, $n3, $n4, $n5);
rsort ($array);
print "O maior número é o ".$array[0];