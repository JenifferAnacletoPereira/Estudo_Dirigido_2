<?php

print "Digite o primeiro número (não repetir):";
$Primeiro_Numero = fgets (STDIN);

print "Digite o número número (não repetido):";
$Segundo_Numero = fgets (STDIN);

print "Digite o terceiro número (não repetir):";
$Terceiro_Numero = fgets (STDIN);

// primeiro número maior

if ($Primeiro_Numero> $Segundo_Numero and $Segundo_Numero> $Terceiro_Numero) {

    print "$Primeiro_Numero \n";
    print"$Segundo_Numero \n";
    print"$Terceiro_Numero \n";

}

elseif ($Primeiro_Numero> $Terceiro_Numero and $Terceiro_Numero> $Segundo_Numero) {

    print "$Primeiro_Numero \n";
    print "$Terceiro_Numero \n";
    print "$Segundo_Numero \n";

}

// segundo número maior

elseif ($Segundo_Numero> $Primeiro_Numero and $Primeiro_Numero> $Terceiro_Numero) {

    print "$Segundo_Numero \n";
    print "$Primeiro_Numero \n";
    print "$Terceiro_Numero \n";

}

elseif ($Segundo_Numero> $Terceiro_Numero and $Terceiro_Numero> $Primeiro_Numero) {

    print "$Segundo_Numero \n";
    print "$Terceiro_Numero \n";
    print "$Primeiro_Numero \n";

}

// Terceiro número maior

elseif ($Terceiro_Numero> $Primeiro_Numero and $Primeiro_Numero> $Segundo_Numero) {

    print "$Terceiro_Numero \n";
    print "$Primeiro_Numero \n";
    print"$Segundo_Numero \n";

}

elseif ($Terceiro_Numero> $Segundo_Numero and $Segundo_Numero> $Primeiro_Numero) {

    print "$Terceiro_Numero \n";
    print "$Segundo_Numero \n";
    print "$Primeiro_Numero \n";

}