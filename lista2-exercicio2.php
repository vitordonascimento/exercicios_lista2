<?php 

print "Digite um número:";

$n = (int) fgets (STDIN);

if ($n > 0){
print "O número $n é positivo";
}
if ($n < 0){
    print "O número $n é negativo";
}