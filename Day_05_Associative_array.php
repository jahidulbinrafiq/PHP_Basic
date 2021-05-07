<?php
// $september_hits = [
//     "The Sixth Sense" => 22896967,
//     "Stigmata"        => 18309666,
//     "Blue Streak"     => 19208806,
//     "Double Jeopardy" => 23162542,
// ];

// echo implode( " ", $september_hits );
// echo "<br/>";
// print_r( $september_hits );

// $assignment_one = ["Alex" => 87, "Kenny" => 91, "Natalia" => 91, "Lily" => 67, "Dan" => 81, "Kat" => 77, "Sara" => 65];

// $assignment_two = ["Alex" => 91, "Kenny" => 99, "Natalia" => 100, "Lily" => 61, "Dan" => 88, "Kat" => 90];

// $assignment_three = ["Alex" => 78, "Kenny" => 92, "Natalia" => 94, "Lily" => 79, "Dan" => 73, "Sara" => 61];

// $student_name = "Alex";

// $assignment_two["Sara"]  = 65;
// $assignment_three["Kat"] = 97;
// $dans_grades             = [$assignment_one["Dan"], $assignment_two["Dan"], $assignment_three["Dan"]];

// echo $assignment_two[$student_name];

// Changing and Removing Elements

// $my_car = [
//     "oil"         => "black and clumpy",
//     "brakes"      => "new",
//     "tires"       => "old with worn treads",
//     "filth"       => "bird droppings",
//     "wiper fluid" => "full",
//     "headlights"  => "bright",
// ];
// print_r( $my_car );

// $my_car["oil"]   = "new and premium";
// $my_car["tires"] = "new with deep treads";
// unset( $my_car["filth"] );
// print_r( $my_car );

// $num_array   = ["some text" => "one thousand", "one hundred" => "one hundred", "six hundred" => "six hundred"];
// $num_array[] = "New Element in \$num_array";

// print_r( $num_array );

// $my_array        = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
// $more_rankings   = ["capybara" => "cutest", "lizard" => "not cute", "dog" => "max cuteness"];
// $animal_rankings = $my_array + $more_rankings;

// print_r( $animal_rankings );

// echo "<br/>";

$my_array = ["jamal", "karim", "sokina", "nazrul"];

$copy = &$my_array;
print_r( $copy );
echo "<br/>";
$my_array[] = "jamal uddin";
print_r( $my_array );
echo "<br/>";
print_r( $copy );