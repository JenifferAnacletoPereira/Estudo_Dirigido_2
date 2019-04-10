<?php
print  " Digite um número entre 0-1000: \n " ;
$Numero = (int) fgets ( STDIN );

$centena = ( int ) ($Numero / 100 ) % 100 ;
$dezena = ( int ) ( $Numero / 10 ) % 10 ;
$unidade = ( int ) ( $Numero % 100 ) % 10 ;

if ($centena<2 and $dezena<2 and $unidade<2) {
    print"O numero possui $centena centena \n";
    print"O numero possui $dezena dezena \n";
    print"O numero possui $unidade unidade \n";

}

elseif ($centena<2 and $dezena>2 and $unidade<2) {
    print"O numero possui $centena centena \n";
    print"O numero possui $dezena dezenas \n";
    print"O numero possui $unidade unidade \n";

}

elseif ($centena<2 and $dezena<2 and $unidade>=2) {
    print"O numero possui $centena centena \n";
    print"O numero possui $dezena dezena \n";
    print"O numero possui $unidade unidades \n";

}

elseif ($centena>2 and $dezena<2 and $unidade<2) {
    print"O numero possui $centena centenas \n";
    print"O numero possui $dezena dezena \n";
    print"O numero possui $unidade unidade \n";

}

elseif ($centena>2 and $dezena>2 and $unidade<2) {
    print"O numero possui $centena centenas \n";
    print"O numero possui $dezena dezenas \n";
    print"O numero possui $unidade unidade \n";

}

elseif ($centena>2 and $dezena<2 and $unidade>=2) {
    print"O numero possui $centena centenas \n";
    print"O numero possui $dezena dezena \n";
    print"O numero possui $unidade unidades \n";

}

elseif ($centena<2 and $dezena>2 and $unidade>=2) {
    print"O numero possui $centena centena \n";
    print"O numero possui $dezena dezenas \n";
    print"O numero possui $unidade unidades \n";

}


else {
    print  "O número $Numero é igual à $centena centenas, $dezena dezenas e $unidade unidades " ;
}