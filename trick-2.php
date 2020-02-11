<?php

for($i = 1; $i <= 117; $i += 1) 

{
    $div3 = $i % 3 === 0;
    $div7 = $i % 7 === 0;

    if (($div3) || ($div7)) {
        var_dump($i);
    }
}