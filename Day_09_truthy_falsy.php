<?php
/*
Empty strings
null
an undefined or undeclared variable
an empty array
the number 0
the string "0"
 */
$unknown_variable;
function truthyOrFalsy( $value ) {

    if ( $value ) {
        return "True";
    } else {
        return "False";
    }

}

echo truthyOrFalsy( "" );
echo "<br/>";
echo truthyOrFalsy( "0" );
echo "<br/>";
echo truthyOrFalsy( 0 );
echo "<br/>";
echo truthyOrFalsy( [] );
echo "<br/>";

// echo truthyOrFalsy( $unknown_variable );
// echo "<br/>";
echo truthyOrFalsy( " " );
echo "<br/>";