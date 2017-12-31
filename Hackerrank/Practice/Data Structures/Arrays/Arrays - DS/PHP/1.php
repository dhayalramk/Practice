<?php echo implode(' ',array_reverse(explode(' ',explode(PHP_EOL,file_get_contents('php://stdin'))[1]))); ?>
