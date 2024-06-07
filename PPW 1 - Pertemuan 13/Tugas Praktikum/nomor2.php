<?php
// Membuat array multi dimensi
$students = array(
    array(
        "name" => "John",
        "age" => 20,
        "grade" => 90
    ),
    array(
        "name" => "Jane",
        "age" => 22,
        "grade" => 80
    ),
    array(
        "name" => "Doe",
        "age" => 19,
        "grade" => 50
    ),
    array(
        "name" => "Adam Smith",
        "age" => 21,
        "grade" => 100
    ),    
    array(
        "name" => "Jhon Doe",
        "age" => 21,
        "grade" => 65
    )
);

// Menampilkan hasil akhir siswa berdasarkan nilai mereka
echo "<br>Students with their grades:<br>";
foreach ($students as $student) {
    if ($student["grade"] >= 90) {
        echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . " -> got A<br>";
    } elseif ($student["grade"] >= 80) {
        echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . " -> got B<br>";
    } elseif ($student["grade"] >= 70) {
        echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . " -> got C<br>";
    } elseif ($student["grade"] >= 60) {
        echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . " -> got D<br>";
    } else {
        echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . " -> got F<br>";
    }
}

?>