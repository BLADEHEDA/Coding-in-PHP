<?php
class Student {
    // constructor should be public
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // for external use
    public function say_name() {
        echo "My name is " . $this->full_name() . "\n";
    }

    // for internal use
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$alex = new Student("Alex", "Jones");

$alex->say_name();

// this will not work
// echo $alex->full_name();
?>
<?php
// TODO: Implement the Car class here
class Car {
    public function _construct($brand, $make_year) 
    {
    $this->brand=$brand;
    $this->make_year=$make_year;
    }

// public function print_details() {
public function print_details() {
echo "brand name is ".$this->brand." made in".$this->make_year;
}
}

$car = new Car("Toyota", 2006);
$car->print_details();
?>



