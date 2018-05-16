<?php
use Support\Debug\Dumper;

if (! function_exists('dd')) {

    function dd(...$args)
    {
        http_response_code(500);
        foreach ($args as $x){
            (new Dumper)->dump($x);
        }
        die(1);
    }
}
