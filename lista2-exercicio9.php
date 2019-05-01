<?php
 
print "Digite três números \n\n";

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);

$array = [$n1, $n2, $n3];
rsort($array);

print_r ($array);