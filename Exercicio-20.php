<?php

for ($a=0; $a < 8; $a++) { 
    print "* * * * * * * * \n";
}


Print "\n";

for ($e=0; $e < 8 ; $e++) { 
    
    for ($i=-1; $i < $e ; $i++) { 
        
        Print"* ";
    }
    Print "\n";
}




Print "\n";

for ($e=0; $e < 8 ; $e++) { 
    
    for ($k=0; $k < 8 - $e; $k++) { 
       print '  ';
    }

    for ($i=-1; $i < $e ; $i++) { 
        
        Print"* ";
    }
    Print "\n";
}

