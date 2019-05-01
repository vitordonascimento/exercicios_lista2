<?php

print "A qual sexo você pertence? (M para masculino e F para feminino):";

$gen = (STRING) fgetc (STDIN);

if ($gen == 'M'){
    print "Você é do sexo masculino \n";
}

elseif($gen == 'F'){
    print "Você é do sexo feminino \n";
}

else{
    print "Sexo inválido \n";
}