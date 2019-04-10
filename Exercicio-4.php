<?php
Print"Digite uma letra:";
$letra= fgetc (STDIN);

if (($letra=="a") or ($letra=="e") or ($letra=="i") or ($letra=="o") or ($letra=="u")) {

    Print "A letra digitada é uma vogal";
}


else  {
Print "A letra digitada não é uma vogal";
 }