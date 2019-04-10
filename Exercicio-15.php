<?php

Print"Digite o primeiro número";
$primeiro = fgets (STDIN);

Print"Digite o segundo número ";
$segundo= fgets (STDIN);

Print"Digite o terceiro número ";
$terceiro= fgets (STDIN);

Print"Digite o quarto número ";
$quarto= fgets (STDIN);

Print"Digite o quinto número ";
$quinto= fgets (STDIN);

if ($primeiro>$segundo and $primeiro>$terceiro and $primeiro>$quarto and $primeiro>$quinto){

    Print"O primeiro número é o maior: $primeiro \n";


}

if ($segundo>$primeiro and $segundo>$terceiro and $segundo>$quarto and $segundo>$quinto){

    Print"O segundo número é o maior: $segundo \n";


}

if ($terceiro>$primeiro and $terceiro>$segundo and $terceiro>$quarto and $terceiro>$quinto){

    Print"O terceiro número é o maior: $terceiro \n";


}

if ($quarto>$primeiro and $quarto>$segundo and $quarto>$terceiro and $quarto>$quinto){

    Print"O quarto número é o maior: $quarto \n";


}

if ($quinto>$primeiro and $quinto>$segundo and $quinto>$terceiro and $quinto>$quarto){

    Print"O quinto número é o maior: $quinto \n";


}

