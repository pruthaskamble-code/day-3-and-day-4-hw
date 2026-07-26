<?php
interface CourseActions {
    public function enroll();
    public function drop();
    public function completeCourse();
}
class OnlineCourse implements CourseActions {
    private $courseName;
    function __construct($courseName) {
        $this->courseName = $courseName;
    }
    public function enroll() {
        echo "Enrolled in online course: " . $this->courseName . "<br>";
        echo "Access provided through online learning portal.<br>";
    }
    public function drop() {
        echo "Dropped from online course: " . $this->courseName . "<br>";
        echo "Access to online materials has been removed.<br>";
    }
    public function completeCourse() {
        echo "Online course completed: " . $this->courseName . "<br>";
        echo "Certificate generated after successful completion.<br>";
    }
}
class InPersonCourse implements CourseActions {
    private $courseName;
    function __construct($courseName) {
        $this->courseName = $courseName;
    }
    public function enroll() {
        echo "Enrolled in in-person course: " . $this->courseName . "<br>";
        echo "Classroom seat has been allocated.<br>";
    }
    public function drop() {
        echo "Dropped from in-person course: " . $this->courseName . "<br>";
        echo "Classroom registration has been cancelled.<br>";
    }
    public function completeCourse() {
        echo "In-person course completed: " . $this->courseName . "<br>";
        echo "Attendance and final assessment verified.<br>";
    }
}
$online = new OnlineCourse("Web Development");
$online->enroll();
$online->completeCourse();
$online->drop();
echo "<br>";
$inPerson = new InPersonCourse("Database Management");
$inPerson->enroll();
$inPerson->completeCourse();
$inPerson->drop();
?>