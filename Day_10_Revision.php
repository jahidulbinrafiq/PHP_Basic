
<!-- // function myTest() {
//     static $number = 0;
//     echo $number, "<br/>";
//     $number++;
// }
// myTest();
// myTest(); -->
<ul>
<?php

for ( $i = 0; $i <= 1; $i++ ) {
    ?>
<li>Duck</li>
<?php
}

?>
<li>Goose</li>
</ul>

<hr>
<ul>
<?php

for ( $i = 0; $i <= 1; $i++ ):

?>
<li>Duck</li>
<?php
endfor;
?>
<li>Goose</li>
</ul>
