<?php

print "Digite cinco números : \n\n";

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);
$n4 = (int) fgets (STDIN);
$n5 = (int) fgets (STDIN);

$soma = $n1 + $n2 + $n3 + $n4 + $n5;

$media = $soma /5;

print "A soma dos números é $soma \n\n";

print "A média dos números é $media \n\n";