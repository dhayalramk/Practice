<?php
    $ar = explode(' ',explode(PHP_EOL,file_get_contents('php://stdin'))[1]);
    echo array_count_values($ar)[max($ar)];
?>
