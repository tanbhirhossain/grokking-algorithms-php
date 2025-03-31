<?php

/*

1.1 Suppose you have a sorted list of 128 names, and you’re searching
through it using binary search. What’s the maximum number of
steps it would take?

*/

function binarySearch($names, $target)
{
/*################## Normal Search ##########################
    $steps = 0;
    foreach($names as $key => $name){
        $steps++;

        if($name == $target){
            return "Found the name '{$name}' and Index is: $key . ANd Steps $steps";      
        }
    }
    return "Not Found";
################### Binary Search ########################## */

    $low = 0;
    $high = count($names) - 1;
    $steps = 0;
    while($low <= $high){
        $mid = (int) (($low + $high) / 2);
        if($names[$mid] == $target){
            return "Found '{$target}' at index $mid in $steps steps.";   
        }
        
        $steps++;

        if($target > $names[$mid]){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }

    }

    return "Not Found in $steps steps.";  

    
}


//128 NAME
$names = [
    "Aaron", "Abigail", "Adam", "Aiden", "Alex", "Alice", "Alyssa", "Amanda", "Amber", "Amy", "Andrew", "Angela", "Anna", "Anthony", "Ashley", "Austin",
    "Barbara", "Benjamin", "Bethany", "Blake", "Brandon", "Brenda", "Brian", "Brittany", "Brooke", "Bryan", "Caleb", "Cameron", "Carla", "Carlos", "Catherine", "Charles",
    "Charlotte", "Chloe", "Christian", "Christina", "Christopher", "Cindy", "Claire", "Colin", "Connor", "Courtney", "Crystal", "Curtis", "Cynthia", "Daniel", "Danielle",
    "David", "Deborah", "Dennis", "Derek", "Diana", "Diane", "Eric", "Erica", "Ethan", "Evan", "Evelyn", "Garrett",  "Grace", "Gregory", "Hannah", "Harold", "Heather",
    "Henry", "Hunter", "Isabella", "Isaiah", "Jack", "Jacob", "James", "Jasmine", "Jason", "Jeffrey", "Jennifer", "Jessica", "Joanna", "John", "Jonathan", "Jordan",
    "Joseph", "Joshua", "Joyce", "Julia", "Justin", "Kaitlyn", "Karen", "Katherine", "Kathryn", "Kayla", "Keith", "Kelly", "Kenneth", "Kevin", "Kimberly", "Kyle",
    "Laura", "Lauren", "Liam", "Lillian", "Lindsey", "Logan", "Lucas", "Madeline", "Madison", "Maria", "Marie", "Mark", "Matthew", "Megan", "Melissa", "Michael",
    "Michelle", "Molly", "Nathan", "Natalie", "Nicholas", "Nicole", "Noah", "Olivia", "Patrick", "Paul", "Rachel", "Rebecca", "Richard", "Robert", "Ryan", "Samantha"
];


print(binarySearch($names, "Samantha"));
