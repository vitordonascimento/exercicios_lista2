<?php

print "Digite o valor de A: \n\n";
$a = fgets (STDIN);

if($a == 0){
    print "O valor de A nâo pode ser zero \n\n";
    end;
}
print "Digite o valor de B: \n\n";
$b = fgets (STDIN);

print "Digite o valor de C: \n\n";
$c = fgets (STDIN);

$delta = ($b ** $b) - (4 * $a * $c);

if ($delta < 0){
    print "O valor de delta é negativo , portanto não possui raizes reais";
    end;
}
elseif($delta == 0){
    $x = -$b /2 *$a;
    print "O valor de x é $x ";
}
elseif($delta >0){
    $x1 = (-$b - sqrt($delta)) /2 *$a;
    $x2 = (-$b + sqrt($delta)) /2 *$a;
    print "O valor de delta é $delta \n\n";
    print "O valor de x1 é: $x1 \n\n";
    print "O valor de x2 é: $x2 \n\n";
}