<?php

print "Digite um número inteiro menor que 1000: \n\n";

$numero = (int) fgets (STDIN);
$centena = (int) ($numero/100) %100;
$dezena = (int) ($numero/10) %10;
$unidade = (int) ($numero%100) %10;

if ($centena == 1){
    if($centena == 1 and $dezena == 1){
        if($centena == 1 and $dezena == 1 and $unidade == 1){
            print "$numero = $centena centena, $dezena dezena e $unidade unidade \n\n";
            exit;
        }
        print "$numero = $centena centena, $dezena dezena, $unidade unidades \n\n";
        exit;
    }
    if($centena == 1 and $unidade ==1){
        print "$numero = $centena centena, $dezenas dezenas e $unidade unidade \n\n";
        exit;
    }
    print "$numero = $centena centena, $dezena dezenas e $unidade unidades \n\n";
    exit;
}
if ($dezena == 1){
    if ($dezena == 1 and $centena == 1){
        if($dezena == 1 and $centena == 1 and $unidade == 1){
            print "$numero = $centena centena, $dezena dezena e $unidade unidade \n\n"
            exit;
        }
        print "$numero = $centena centena, $dezena dezena e $unidade unidades \n\n"
            exit;
    }
    if($dezena == 1 and $unidade == 1){
    print "$numero = $centena centenas, $dezena dezena e $unidade unidade \n\n"
            exit;
    }
    print "$numero = $centena centenas, $dezena dezena e $unidade unidade \n\n"
    exit;   
}
if($unidade == 1){
    if($unidade == 1 and $dezena == 1){
        if($unidade ==1 and $dezena == 1 and $centena == 1){
            print "$numero = $centena centena, $dezena dezena e $unidade unidade \n\n";
            exit;
        }
        print "$numero = $centena centenas, $dezena dezena e $unidade unidade \n\n";
            exit;
    }
    if($centena == 1 and $unidade == 1){
        print "$numero = $centena centena, $dezena dezenas e $unidade unidade \n\n";
        exit;
    }
    print "$numero = $centena centenas, $dezena dezenas e $unidade unidade \n\n";
    exit;
}

else{
print "$numero = $centena centenas, $dezena dezenas e $unidade unidades \n\n";
}