<?php

$randomNums = array(
    413,15135,34,214,
    153,531,77,33,00,
    -134,-15,0,-61,150,
);

foreach ($randomNums as $num) {
    if($num%2 == 0){
        echo "$num merupakan bilangan genap <br>";
    }else{
        echo "$num merupakan bilangan ganjil<br>";
    }
}

?>