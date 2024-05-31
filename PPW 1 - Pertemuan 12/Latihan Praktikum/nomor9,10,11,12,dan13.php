<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Kalimat asli: " . "<br>" . "Hello World!". "<br>". "<br>";

        // Fungsi untuk menghitung panjang karakter string
        echo "Fungsi menghitung panjang karakter string: " . "<br>" . strlen("Hello World!") . "<br>". "<br>";
        
        // Fungsi untuk menghitung jumlah kata
        echo "Fungsi menghitung jumlah kata: "."<br>" . str_word_count("Hello World!") . "<br>". "<br>";
        
        // Fungsi untuk membalikkan string
        echo "Fungsi membalikkan string: ". "<br>" . strrev("Hello World!") . "<br>". "<br>";

        // Fungsi untuk pencarian kata dalam string
        echo "Fungsi pencarian kata dalam string: " . "<br> ". strpos("Hello World!", "World") . "<br>". "<br>";

        // Fungsi untuk mengganti teks dalam string
        echo "Fungsi mengganti teks dalam string: " . '<br>' . str_replace("world", "dunia", "Hello World!") . "<br>". "<br>";
    ?>
</body>
</html>