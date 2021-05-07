<?php
/*
if ( $letter_grade === "A" ) {
echo "Terrific";
} elseif ( $letter_grade === "B" ) {
echo "Good";
} elseif ( $letter_grade === "C" ) {
echo "Fair";
} elseif ( $letter_grade === "D" ) {
echo "Needs Improvement";
} elseif ( $letter_grade === "F" ) {
echo "See me!";
} else {
echo "Invalid grade";
}

switch ($letter_grade){
case "A":
echo "Terrific";
break;
case "B":
echo "Good";
break;
case "C":
echo "Fair";
break;
case "D":
echo "Needs Improvement";
break;
case "F":
echo "See me!";
break;
default:
echo "Invalid grade";
}
 */

#problem statment:

/*
The U.S. government has multiple classifications of air quality each symbolized by a color:

The color "green" indicates the air quality is "good".
The color "yellow" indicates the air quality is "moderate".
The color "orange" indicates the air quality is "unhealthy for sensitive groups".
The color "red" indicates the air quality is "unhealthy".
The color "purple" indicates the air quality is "very unhealthy".
And the color "maroon" indicates the air quality is "hazardous".
Write a function, airQuality(), that takes in a color as a string, and prints the corresponding air quality.

Your function should use a switch statement. You should provide a default string of "invalid color" for any input aside from the six colors listed.
 */
function airQuality( $color ) {

    switch ( $color ) {
    case "green":
        echo "good";
        break;
    case "yellow":
        echo "moderate";
        break;
    case "orange":
        echo "unhealthy for sensitive groups";
        break;
    case "red":
        echo "unhealthy";
        break;
    case "purple":
        echo "very unhealthy";
        break;
    case "maroon":
        echo "hazardous";
        break;
    default:
        echo "invalid color";
    }

}

airQuality( "green" );
echo "<br/>";
airQuality( "yellow" );
echo "<br/>";
airQuality( "maroon" );
echo "<br/>";
airQuality( "hasjgdlajshgd" );