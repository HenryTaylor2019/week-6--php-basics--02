<?php

declare(strict_types=1);

function average5(int $num1, int  $num2, int  $num3, int  $num4, int  $num5) : float {
    return (($num1 + $num2 + $num3 + $num4 + $num5) / 5);
}

var_dump(average5(1, 2, 3, 4, 5)); // float(3)

// Create a function, average5, that takes five numbers as arguments. The function should return the average of the numbers.