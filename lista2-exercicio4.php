<?php

print "Digite qualquer letra: \n\n";

$letra = (string) fgetc (STDIN);

if ($letra == 'A'   or $letra == 'E'  or $letra == 'I'   or $letra == 'O'   or $letra == 'U' ){
    print "você digitou uma vogal, a letra $letra \n\n";
}

else {
    print "você digitou uma consoante, a letra $letra";
}