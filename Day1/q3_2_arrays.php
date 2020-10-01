<?php
   
        $mata = array(
            array(1,2),
            array(3,4)
        );
        $matb = array(
            array(7,6),
            array(4,6)
        );
        $matc = array();
        
        for($i=0; $i<=1; $i++){
            for($j=0; $j<=1; $j++){
                $matc[$i][$j] = $mata[$i][$j] + $matb[$i][$j];
                echo $matc[$i][$j]." ";
            }
            
        }
?>