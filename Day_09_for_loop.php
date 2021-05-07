<?php

for ( $i = 10; $i >= 0; $i-- ) {

    if ( $i > 2 ) {
        echo $i, "<br/>";
    } elseif ( $i == 2 ) {
        echo "Ready!", "<br/>";
    } elseif ( $i == 1 ) {
        echo "Set!", "<br/>";
    } elseif ( $i == 0 ) {
        echo "Go!", "<br/>";
    }

}
