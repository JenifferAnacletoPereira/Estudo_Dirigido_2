<?php

Print"Digite F ou M conforme seu sexo:";
$sexo=fgetc (STDIN);

if ($sexo=="F" or $sexo=="f") {

    Print"Seu sexo é o Feminino \n";
    Exit();
}

elseif ($sexo=="M" or $sexo=="m") {

    Print "Seu sexo é o Masculino \n";
    Exit();
}

if($sexo != "M" or $sexo != "m"){
   Print "Sexo inválido";
}

elseif($sexo != "F" or $sexo !="f") {
    Print "Sexo inválido";
}