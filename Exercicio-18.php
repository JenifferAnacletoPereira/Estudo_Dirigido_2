<?php

$vezes=1;
$par=0;
$impar=0;

while ($vezes<=10){
Print"Digite um número: ";
$numero = (float) fgets (STDIN);



if($numero%2==0 and $numero!=0){
    $par++;}

elseif($numero%2!=0){
    $impar++;
}
$vezes++;

}

Print"Foram apresentados $par numeros pares, e $impar numeros impares \n";