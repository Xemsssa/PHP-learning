<?php

class Students {

    public function __construct($first_name, $last_name) {
    	$this -> first_name = $first_name;
        $this -> last_name = $last_name; 
    }

    
    public function say_name() {
    
        echo "My name is " . $this -> first_name . " " . $this -> last_name . ".\n";
    }
}


$alex = new Students("Alex", "Jones");
$alex -> say_name();


class MathStudents extends Students {
    function sum_numbers($first_number, $second_number) {
    $sum = $first_number + $second_number;
    echo $this -> first_name . " says that " . $first_number . " + " . $second_number . " is " . $sum;   
    }

}

$eric = new MathStudents("Eric", "Chang");
$eric -> say_name();
$eric -> sum_numbers(3, 5);


?>