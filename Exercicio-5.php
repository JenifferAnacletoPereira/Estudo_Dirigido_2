<?php

Print"Digite nota 1:";
$nota1= fgets (STDIN);

Print "Digite nota 2:";
$nota2= fgets (STDIN);

$media_total= (($nota1+$nota2)/2);


if ($media_total==10){
    Print "Voce foi aprovado com media 10, parabéns!";
    Exit();
}

if ($media_total>7 and $media_total!=10) {
    Print "Voce foi aprovado, sua media foi $media_total";
}

else {
       Print "Voce foi reprovado, sua media foi $media_total";
}
