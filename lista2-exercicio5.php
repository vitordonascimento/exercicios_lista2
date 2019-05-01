<?php

print "Digite as duas notas do aluno \n\n";

$nota1 = (int) fgets (STDIN);
$nota2 = (int) fgets (STDIN);

$media = ($nota1 + $nota2) /2;

if ($media<7){
    print"Reprovado";
}
else {
    print "Aprovado";
}
if ($media == 10 ){
    print " com Distinção";
}