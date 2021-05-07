<?php
function duckDuckGoose( $is_goose ) {

    if ( !$is_goose ) {
        return "duck";
    } else {
        return "goose!";
    }

}

echo duckDuckGoose( FALSE );
echo "<br/>";
echo duckDuckGoose( FALSE );
echo "<br/>";
echo duckDuckGoose( TRUE );