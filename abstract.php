<?php
abstract class StudentRecord {
    protected $name;
    protected $id;
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
    abstract function calculateGrade();
    function displayDetails() {
        echo "Student ID: " . $this->id . "<br>";
        echo "Student Name: " . $this->name . "<br>";
    }
}
class UndergraduateStudent extends StudentRecord {
    private $assignments;
    private $exams;
    function __construct($id, $name, $assignments, $exams) {
        parent::__construct($id, $name);
        $this->assignments = $assignments;
        $this->exams = $exams;
    }
    function calculateGrade() {
        $grade = ($this->assignments * 0.4) + ($this->exams * 0.6);
        echo "Grade (Undergraduate): " . $grade . "%<br>";
    }
}
class GraduateStudent extends StudentRecord {
    private $researchProjects;
    private $exams;
    function __construct($id, $name, $researchProjects, $exams) {
        parent::__construct($id, $name);
        $this->researchProjects = $researchProjects;
        $this->exams = $exams;
    }
    function calculateGrade() {
        $grade = ($this->researchProjects * 0.5) + ($this->exams * 0.5);

        echo "Grade (Graduate): " . $grade . "%<br>";
    }
}
$ugStudent = new UndergraduateStudent(12, "Tom", 85, 90);
$ugStudent->displayDetails();
$ugStudent->calculateGrade();
echo "<br>";
$gradStudent = new GraduateStudent(20, "Jerry", 95, 88);
$gradStudent->displayDetails();
$gradStudent->calculateGrade();
?>