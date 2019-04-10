<?php 

Print"Digite um número para a base:";
$base=(float) fgets (STDIN);

Print"Digite um número para o expoente:";
$expoente=(float) fgets (STDIN);

$conta= $base**$expoente;

Print"O resultado é igual a $conta \n";