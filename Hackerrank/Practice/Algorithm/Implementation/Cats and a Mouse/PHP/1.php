<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d %d %d",$x,$y,$z);
    $aD = abs($z - $x);
    $bD = abs($z - $y);
    if($aD == $bD){
        echo 'Mouse C';
    }else if($aD < $bD){
        echo 'Cat A';
    }else{
        echo 'Cat B';
    }
    echo PHP_EOL;
}

?>
