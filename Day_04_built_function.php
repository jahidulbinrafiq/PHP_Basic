<?php

//gettype(), var_dump()

// $name  = "Welcome to the magical world of built-in functions.";
// $age   = 34546576;
// $float = 34.345;
// $bool  = false;
// echo gettype( $name ), "<br/>";
// echo gettype( $age ), "<br/>";
// echo gettype( $float ), "<br/>";
// echo gettype( $bool ), "<br/>";

// echo var_dump( $name ), "<br/>";
// echo var_dump( $age ), "<br/>";
// echo var_dump( $float ), "<br/>";
// echo var_dump( $bool ), "<br/>";

//strrev(),strtolower(),str_repeat(),substr_count(),strlen(),

// echo strrev( "Hello,world!" ), "<br/>";
// echo strtolower( "Hello,PHP ProgRammer" ), "<br/>";
// echo strtoupper( "Hello,PHP ProgRammer" ), "<br/>";
// echo str_repeat( "Hi ", 5 );

//abs(),round(),ceil(),floor()

// echo abs( -78.34 ), "<br/>";

// echo round( 0.49 ), "<br/>";
// echo round( 0.59 ), "<br/>";

// echo ceil( 0.49 ), "<br/>";
// echo floor( 0.49 ), "<br/>";

//rand()

echo rand( 5, 2 );

//getrandmax() function help us  to find out what the maximum random number is in this environment.
$max = getrandmax();
echo $max;