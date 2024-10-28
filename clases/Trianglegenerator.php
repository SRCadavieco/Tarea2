<?php 
function triangleGenerator($altura){
    if ($altura <= 0) {
        return ""; 
    }
    
    
    if ($altura % 2 == 0) {
        $altura++;
    }

$resFinal="";

for ($i = 0; $i < $altura; $i++) {
    
    if ($i % 2 == 0) {
        $resFinal.= "<p>"; 
        
        for ($j = 0; $j < ($altura - $i) / 2; $j++) {
            $resFinal .= "&nbsp;"; 
        }
        
        for ($k = 0; $k <= $i; $k++) {
            $resFinal .= "*"; 
        }
        $resFinal .= "</p>"; 
    }
}
return $resFinal;
 }
