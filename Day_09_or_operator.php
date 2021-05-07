<?php
function willWeEat( $meal_type, $hungry_or_not ) {

    if ( $meal_type == "dessert" || $hungry_or_not == true ) {
        return "Yum. Thanks!";
    } else {
        return "No thanks. We're not hungry.";
    }

}

echo willWeEat( "dessert", false );
echo "<br><br>";
echo willWeEat( "dinner", false );