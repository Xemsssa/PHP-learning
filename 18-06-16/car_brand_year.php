<?php
// TODO: Implement the Car class here
class Car{
    public function __construct($brand, $year) {
        $this -> brand = $brand;
        $this -> year = $year;
    }
    
    public function print_details() {
    	print_r("This car is a " . $this -> year . " " . $this -> brand . ".\n"); 
    }

}


$car = new Car("Toyota", 2006);
$car->print_details();