<?php
function clapYourHands( $bool1, $bool2 ) {

    if ( $bool1 && $bool2 ) {
        return "CLAP!";
    } else {
        return ":(";
    }

}

echo clapYourHands( TRUE, TRUE );
echo "<br/>";
echo clapYourHands( TRUE, FALSE );