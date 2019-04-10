<?php

Print "Seja Bem Vindo a loja!! \n";

Print"Informe o preço da primeira mercadoria:";
$primeira_merc= fgets (STDIN);

Print"Informe o preço da segunda mercadoria:";
$segunda_merc= fgets (STDIN);

Print"Informe o preço da terceira mercadoria:";
$terceira_merc= fgets (STDIN);


if (( $primeira_merc > $terceira_merc ) and ( $segunda_merc > $terceira_merc)) {
    print "A terceira mercadoria está mais em conta: $terceira_merc \n";
 }
elseif (( $primeira_merc >  $segunda_merc ) and ( $terceira_merc > $segunda_merc)) {
     print "A segunda mercadoria está mais em conta: $segunda_merc \n ";
 }
 else{
    print " A primeira mercadoria está mais em conta: $primeira_merc \n";

 }