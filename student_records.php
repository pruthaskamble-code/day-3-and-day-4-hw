<?php
$file_name = "student_records.txt";
function readRecords($file_name) {
    if (file_exists($file_name)) {
        $file = fopen($file_name, "r");
        echo "<h3>Student Records:</h3>";
        while (($line = fgets($file)) !== false) {
            echo $line . "<br>";
        }
        fclose($file);
    } else {
        echo "File does not exist.";
    }
}
function writeRecord($file_name) {
    $name = "John";
    $grade = "A";
    $file = fopen($file_name, "w");
    fwrite($file, "Name: " . $name . ", Grade: " . $grade . "\n");
    fclose($file);
    echo "Student record written successfully.<br>";
}
function appendRecord($file_name) {
    $name = "Mary";
    $grade = "B+";
    $file = fopen($file_name, "a");
    fwrite($file, "Name: " . $name . ", Grade: " . $grade . "\n");
    fclose($file);
    echo "Student record appended successfully.<br>";
}
function deleteFile($file_name) {
    if (file_exists($file_name)) {
        unlink($file_name);
        echo "Student records file deleted successfully.<br>";
    } else {
        echo "File does not exist.<br>";
    }
}
writeRecord($file_name);     
appendRecord($file_name);    
readRecords($file_name);    
?>