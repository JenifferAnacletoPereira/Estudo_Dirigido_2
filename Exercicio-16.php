<?php


Print"Digite o primeiro número";
$primeiro = (float) fgets (STDIN);

Print"Digite o segundo número ";
$segundo= (float) fgets (STDIN);

Print"Digite o terceiro número ";
$terceiro= (float) fgets (STDIN);

Print"Digite o quarto número ";
$quarto= (float)  fgets (STDIN);

Print"Digite o quinto número ";
$quinto= (float) fgets (STDIN);

$soma=$primeiro+$segundo+$terceiro+$quarto+$quinto;
$media=$soma/5;

Print"A soma total dos números é: $soma , e a média é :$media \n";