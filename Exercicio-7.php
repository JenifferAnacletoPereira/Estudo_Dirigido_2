<?php

Print"Digite o primeiro número:";
$primeiro_num=(int) fgets (STDIN);

Print"Digite o segundo número:";
$segundo_num=(int) fgets (STDIN);

Print"Digite o terceiro número:";
$terceiro_num= (int) fgets (STDIN);


//maior//

if (( $primeiro_num< $segundo_num ) and ( $segundo_num > $terceiro_num)) {
    print "O segundo número digitado é o maior: $segundo_num \n " ;
 }
 elseif (( $primeiro_num>  $segundo_num ) and ( $primeiro_num > $terceiro_num )) {
     print  "O primeiro número digitado é o maior: $primeiro_num \n " ;
 }

 else {
    print  "O terceiro número digitado é o maior:$terceiro_num  \n " ;
 }

//menor//

 
 if (( $primeiro_num > $segundo_num)  and ( $segundo_num > $terceiro_num)) {
         print "O terceiro número digitado é o menor: $terceiro_num \n";
 }

elseif (($primeiro_num>  $terceiro_num)  and  ($terceiro_num > $segundo_num)) {
         print "O segundo número digitado é o menor: $segundo_num \n ";
 }

else{
         print "O primeiro número digitado é o menor: $primeiro_num \n";
}

 