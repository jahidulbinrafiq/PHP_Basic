<?php
/*
$isClicked = FALSE;

if ( $isClicked ) {
$link_color = "purple";
} else {
$link_color = "blue";
}
 */
/*
$isClicked = FALSE;
$link_color = $isClicked ? "purple" : "blue";
 */

function ternaryCheckout( $items ) {
    return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote( $age ) {
    return $age >= 18 ? "yes" : "no";
}

echo ternaryCheckout( 1 );
echo "<br/>";
echo ternaryCheckout( 13 );
echo "<br/>";
echo ternaryVote( 19 );
echo "<br/>";
echo ternaryVote( 13 );