<?php
function both( $bool1, $bool2 ) {

    if ( $bool1 ) {

        if ( $bool2 ) {
            return "both";
        } else {
            return "not both";
        }

    } else {
        return "not both";
    }

/*
if ( $bool1 && $bool2 ) {
return "both";
} else {
return "not both";
}
 */
}

echo both( TRUE, TRUE );
echo "<br/>";
echo both( FALSE, FALSE );
echo "<br/>";
echo both( TRUE, FALSE );