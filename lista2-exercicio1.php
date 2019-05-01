<?php

print "Digite dois números: ";

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);

if ($n1 > $n2){
    print "O maior número é $n1";
}
if ($n2 > $n1){
    print "O maior número é $n2";
}
