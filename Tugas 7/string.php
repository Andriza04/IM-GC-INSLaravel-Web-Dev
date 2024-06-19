<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h3>Soal No 1</h3>";
    $first_sentence = "Hello PHP!";
    $second_sentence = "I'm ready for the challenges";

    echo $first_sentence. " Panjang string: " . strlen($first_sentence) . ", Jumlah kata: " . count(explode(" ", $first_sentence)) . "<br>";
    echo $second_sentence. " Panjang string: " . strlen($second_sentence) . ", Jumlah kata: " . count(explode(" ", $second_sentence)) . "<br>";

    echo "<h3>Soal No 2</h3>";
    $string2 = "I love PHP";
    echo "<label>String:</label> \"$string2\"<br>";
    $words = explode(" ", $string2);
    echo "Kata pertama: " . $words[0] . "<br>";
    echo "Kata kedua: " . $words[1] . "<br>";
    echo "Kata Ketiga: " . $words[2] . "<br>";

    echo "<h3>Soal No 3</h3>";
    $string3 = "PHP is old but sexy!";
    $new_string3 = str_replace("sexy!", "awesome", $string3);
    echo "\"$new_string3\"<br>";
    ?>
</body>
</html>