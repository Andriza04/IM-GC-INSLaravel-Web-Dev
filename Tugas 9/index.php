<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPP</title>
</head>
<body>
<?php
   require 'animal.php';
   require 'ape.php';
   require 'frog.php';

    $sheep = new animal("shaun");
    $kong = new ape("kera sakti");
    $froggy = new frog("buduk");

    echo $sheep->name;
    echo "<br>";
    echo $sheep->cold_blooded; 
    echo "<br>";
    echo $kong->yell();
    echo "<br>";
    echo $froggy->jump();
    echo "<br><br>";

    echo "name : " . $sheep->name . "<br>";
    echo "legs : " . $sheep->leg . "<br>";
    echo "name : " . $sheep->cold_blooded . "<br><br>";

    echo "name : " . $kong->name . "<br>";
    echo "legs : " . $kong->leg . "<br>";
    echo "name : " . $kong->cold_blooded . "<br><br>";

    echo "name : " . $froggy->name . "<br>";
    echo "legs : " . $froggy->leg . "<br>";
    echo "name : " . $froggy->cold_blooded . "<br><br>";
   ?>
</body>
</html>