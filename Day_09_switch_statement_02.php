<?php

/*
Write a function, returnSeason(). Your function should take in a string representing a month (e.g. "January"), and it should return which season that month falls in.

----------->"December", "January", and "February" are "winter" months.
----------->"March", "April", and "May" are "spring" months.
----------->"June", "July", and "August" are "summer" months.
And "September", "October", and "November" are "fall" months.
 */
function returnSeason( $month ) {

    switch ( $month ) {
    case "December":
    case "January":
    case "February":
        return "winter";
    case "March":
    case "April":
    case "May":
        return "spring";
    case "June":
    case "July":
    case "August":
        return "summer";
    case "September":
    case "October":
    case "November":
        return "fall";
    default:
        return "Invalid";
    }

}

echo returnSeason( "February" );
echo "<br/>";
echo returnSeason( "April" );
echo "<br/>";
echo returnSeason( "August" );
echo "<br/>";
echo returnSeason( "October" );
echo "<br/>";
echo returnSeason( "dfalfas;" );