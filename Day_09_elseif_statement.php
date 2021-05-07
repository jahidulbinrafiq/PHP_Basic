<?php
/*
You’re going to write a function to determine the likely genetic relationship between two people.
Write a function, whatRelation() that has one number parameter representing the percentage of DNA the two people share. Your function should print the likely relationship as a string. We expect the number passed in to always be an integer from 0 to 100
Here’s how it should calculate the relationship:
--------->100 should print "identical twins"
--------->35 through99 should print "parent and child or full siblings"
--------->14through 34 should print "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings"
--------->6 through 13 should print "first cousins"
--------->3 through 5 should print "second cousins"
--------->1 through 2 should print "third cousins"
--------->0 should print "not genetically related"
 */

function whatRelation( $percentage_Dna_share ) {

    if ( $percentage_Dna_share === 100 ) {
        echo "identical twins";
    } elseif ( $percentage_Dna_share >= 35 ) {
        echo "parent and child or full siblings";
    } elseif ( $percentage_Dna_share >= 14 ) {
        echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ( $percentage_Dna_share >= 6 ) {
        echo "first cousins";
    } elseif ( $percentage_Dna_share >= 3 ) {
        echo "second cousins";
    } elseif ( $percentage_Dna_share >= 1 ) {
        echo "third cousins";
    } else {
        echo "not genetically related";
    }

}

whatRelation( 100 );
echo "<br/>";
whatRelation( 35 );
echo "<br/>";
whatRelation( 34 );
echo "<br/>";
whatRelation( 13 );
echo "<br/>";
whatRelation( 14 );
echo "<br/>";
whatRelation( 6 );
echo "<br/>";
whatRelation( 0 );
echo "<br/>";
