<?php

Print"Sequencia de Fibonacci \n";

$fibonacci=0;
$fibonacci2=1;
$fibonacci3=0;


Print"$fibonacci \n";
Print "$fibonacci2 \n";

while ($fibonacci3<500) {

$fibonacci3=$fibonacci+$fibonacci2;
Print"$fibonacci3 \n";

$fibonacci=$fibonacci2;
$fibonacci2=$fibonacci3;

}


