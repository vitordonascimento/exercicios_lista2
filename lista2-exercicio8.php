<?php

print "Digite os preços dos produtos 1, 2 e 3 \n\n";

$p1 = (float) fgets (STDIN);
$p2 = (float) fgets (STDIN);
$p3 = (float) fgets (STDIN);

if ($p1 < $p2){
    $menor = $p1;
    $produto = 1;
}
else{
    $menor = $p2;
    $produto = 2;
}
if ($menor > $p3){
    $menor = $p3;
    $produto = 3;
    print "O produto $produto é o mais barata, com o preço $menor";
}
else{
    print "O produto $produto é o mais barata, com o preço $menor";
}