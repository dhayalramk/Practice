<?php
    $date = 1;
    $month = 0;
    $year = file_get_contents('php://stdin');

    $total = 256;

    $followYear = [];
    $feb = 28;
    
    if($year == 1918){
        $feb = $feb-13;
    }else if( ($year < 1918 && $year%4==0 )
        || ($year%400==0 || ($year%4==0 && $year%100!=0) ) ){
        $feb++;
    } 

    $followYear = [31,$feb,31,30,31,30,31,31,30,31,30,31];

    for($i=0;$i<count($followYear);$i++){
        $month++;
        if($total - $followYear[$i] <= 0){
            $date = $total;
            break;
        }
        $total = $total - $followYear[$i];
    }

    echo DateTime::createFromFormat('d-m-Y', implode('-',[$date,$month,$year]))->format('d.m.Y');


?>
