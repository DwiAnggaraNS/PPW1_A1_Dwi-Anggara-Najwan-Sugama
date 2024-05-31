<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Pembuatan fungsi dengan parameter dan nilai default
        function sapa($nama, $asal = "Indonesia"){
            echo "Selamat datang, $nama dari $asal"."<br>";
        }
        
        echo "Pemanggilan fungsi sapa(): "."<br>";
        
        // Pemanggilan fungsi
        sapa("Dwi","Tasik")."<br>";
        sapa("Budi","Pekanbaru"). "<br>";
        sapa("Asep")."<br>";
        echo "<br>";
        
        function hitung($x, $y){
            return $x + $y;
        }
        
        // Pembuatan fungsi dengan nilai kembalian
        echo "Pemanggilan fungsi hitung(): "."<br>";
        echo "5 + 10 = " . hitung(5,10);
    ?>
</body>
</html>