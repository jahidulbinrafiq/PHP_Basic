<?php
$learner_one = ["is_correct" => FALSE, "box" => ["shape" => "none", "color" => "none"]];

$learner_two = ["is_correct" => TRUE, "box" => ["shape" => "none", "color" => "none"]];

//true=> shape->checkmark and color->green

//false=> shape->Y and color->red

// print_r( $learner_one["box"] );
// echo $learner_one["box"]["shape"];

function markAnswer( $is_correct, &$box ) {

// echo var_dump( $is_correct );

// echo "<br/>";

// print_r( $box );

// echo "<br/>";

    if ( $is_correct ) {
        $box["shape"] = "checkmark";
        $box["color"] = "green";
    } else {
        $box["shape"] = "Y";
        $box["color"] = "red";
    }

}

markAnswer( $learner_one["is_correct"], $learner_one["box"] );
markAnswer( $learner_two["is_correct"], $learner_two["box"] );

print_r( $learner_one["box"] );

echo "<br/>";
print_r( $learner_two["box"] );