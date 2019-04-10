<?php

Print"Digite um valor para a:";
$valor_a= fgets (STDIN);

if ($valor_a == 0) {
    Print "A equação não é de sugundo grau  \n";
    Print"O programa será encerrado";
    Exit ();
}

Print"Digite o valor de b:";
$valor_b= fgets (STDIN);


Print"Digite o valor de c:";
$valor_c=fgets (STDIN);


$delta= (pow($valor_b,2)) - (4*$valor_a*$valor_b);

if ($delta < 0) {
    Print"Não possui raizes reais";
   
}

elseif ($delta==0){

    $valor_x=-($valor_b)/2*$valor_a;
    Print"O valor da raíz é:$valor_x";
    Saída;
    
}

elseif ($delta>0) {

    $valor_x1= (-($valor_b)+sqrt($delta))/2*$valor_a;
    $valor_x2= (-($valor_b)-sqrt($delta))/2*$valor_a;
    Print"O valor de x é $valor_x1, e o valor de x2 é $valor_x2";
}

