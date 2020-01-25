<?php
/**
 *
 * Problem: https://www.geeksforgeeks.org/sum-of-squares-of-first-n-natural-numbers/
 *
 * Algorithm:
 *  1) Get the number n
 *  2) Loop from 1 to n and do power of 2 by (i*i) and sum up
 *  3) Display the result
 *
 * @author dhayalram.k@gmail.com
 *
 * Link to execute: https://ide.geeksforgeeks.org/4hjPvcsT9o
 *
 */
    $n = 100;
    $result = 0;
    for($i=1;$i<=$n;$i++){
        $result += ($i*$i);
    }
    echo $result;
