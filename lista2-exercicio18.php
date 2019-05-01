<?php

$par = 0;
$impar = 0;
$contagem = 1;

do{
    print "Digite um número";
    $n = (float) fgets (STDIN);
    if($n % 2 == 0){
        $par ++;
    }
    if($n $ != 0){
        $impar ++;
    }
    $contagem ++:
}

while ($contagem <= 10);

if ($impar != 1 and $par != 1){
    print "Quantidade de dados impares: $impar \n Quantidade de números pares: $par";
}
elseif($impar ==1 and $par!= 1){
    print "Quantide de de números impar : $impar \n quantidade de números pares $par ";
}
elseif($impar !=1 and $par == 1){
    print "Quantide de de números iguais : $impar \n quantidade de número $par ";
}
elseif($impar ==1 and $par == 1){
    print "Quantide de de números impar : $impar \n quantidade de número: $par ";
}