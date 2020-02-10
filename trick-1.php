<?php

// $n = 0;

$cumulative = 0;

for ($i = 1; $i <= 50; $i += 1) 
{
    
    if($i % 2 !== 0) {
        var_dump($cumulative += $i);
    } 

}