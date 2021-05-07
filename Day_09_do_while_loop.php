<?php
$plant_height = 22;

do {
    echo "The plant is {$plant_height} tall.<br>";

    if ( $plant_height >= 30 ) {
        echo "And can produce fruit.<br>";
    }

    $plant_height++;
} while ( $plant_height <= 30 );
