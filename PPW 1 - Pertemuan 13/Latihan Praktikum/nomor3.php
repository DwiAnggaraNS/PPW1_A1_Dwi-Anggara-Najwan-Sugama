<?php
//Deklarasi dan akses array
$favoriteCars = array("Kijang", "Brio", "Innova");
echo "I like ". $favoriteCars[0] . ", ".$favoriteCars[1]. ", and " .$favoriteCars[2].".";


//Menghitung panjang array (jumlah elemen pada array)
$favoriteCars = array("Kijang", "Brio", "Innova");
echo "Panjang array favoriteCars adalah ". count($favoriteCars);

//Mengakses array melalui perulangan (loop)
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x]; echo "<br>";
}

//Mendeklarasikan Associative array dan mengaksesnya
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
echo "Peter is ". $age['Peter'] . " years old.";

//Mengakses semua nilai associative array dengan perulangan
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
foreach($age as $name => $herOrHisAge) {
    echo "Key=". $name . ", Value=". $herOrHisAge; 
    echo "<br>";
}

//Array Multidimensi
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15,13),
    array("Saab",5,2), array("Land Rover", 17,15)
);
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row] [$col]."</li>";
    }
    echo "</ul>";
}
?>