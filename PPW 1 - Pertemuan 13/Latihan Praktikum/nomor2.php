<?php
//while loop
$num = 1;
while ($num <= 5){
    echo $num."<br>";
    $num++;
}

// do..while
$x = 1;
do {
    echo "The number is: $x <br>"; 
    $x++;
} while ($x <= 5);

//for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

//foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $color) { 
    echo "$color <br>";
}
?>