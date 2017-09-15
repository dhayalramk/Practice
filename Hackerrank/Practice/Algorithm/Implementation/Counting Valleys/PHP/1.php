<?php
    
$arr=str_split(explode(PHP_EOL,file_get_contents('php://stdin'))[1]);
$count = 0;
$level = 1;
$isDown = false;
foreach($arr as $a){
    $a == 'U' ? $level+=1 : $level-=1;
    if($isDown && $level == 1){
        $isDown = false;
        $count++;
    }   
    if($level == 0){
        $isDown = true; 
    }
}
echo $count;

?>