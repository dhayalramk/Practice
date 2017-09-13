<?php

    list($x1,$v1,$x2,$v2) = explode(' ',file_get_contents("php://stdin"));

    $diffSpeed = $v1 - $v2;
    echo ( ($diffSpeed > 0) && (($x2 - $x1) % $diffSpeed == 0) ) ? 'YES' : 'NO';

?>
