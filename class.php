<?php

class car {

    public $wheels = 4;
    public $doors = 4;
    public $engine = 1;

    function movewheels() {
        $this->wheels = 6;
    }
    function playradio() {
        $this->doors = 2;
    }
}

class train extends car {   // child class inherit the parent class (car)

    function trainwheels() {
        $this-> wheels = 20;
    }

    function __construct() {
        echo "constructions";
    }
}

$wheels = new car();
$wheels -> movewheels();
echo $wheels -> wheels . "<br>";

$radio = new train();
$radio -> playradio();
echo $radio -> doors . "<br>";
$radio -> trainwheels();
echo $radio -> wheels;
?>


<?php
// if(class_exists("car")) {
//     echo "yes" . "<br>";
// }else {
//     echo "no";
// }

// if(method_exists("car" , "movewheels")) {
//     echo "method is exist";
// }else {
//     echo "no it's not";
// }
?>