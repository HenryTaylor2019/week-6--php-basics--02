<?php

declare(strict_types=1);

$greeting = "Hello";

function hello($name) {
   global $greeting;
   return $greeting . " " . $name; 
};

var_dump(hello("alice")); // string(11) "hello alice"
var_dump(hello("bob")); // string(9) "hello bob"