<?php
class Student {
    public $id;
    public $name;
    public $grade;
    function __construct($id, $name, $grade) {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
    }
    function displayDetails() {
        echo "Student ID: " . $this->id . "<br>";
        echo "Student Name: " . $this->name . "<br>";
        echo "Student Grade: " . $this->grade . "<br>";
    }
}
$student1 = new Student(12, "Tom", "A+");
$student1->displayDetails();
?>