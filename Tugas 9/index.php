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
    $froggy = new frog("buduk");
    $kong = new ape("kera sakti");

    echo "Name : " . $sheep->name . "<br>";
    echo "legs : " . $sheep->leg . "<br>";
    echo "cold blooded : " . $sheep->cold_blooded . "<br><br>";

    echo "Name : " . $froggy->name . "<br>";
    echo "legs : " . $froggy->leg . "<br>";
    echo "cold blooded : " . $froggy->cold_blooded . "<br>";
    echo "Jump : " , $froggy->jump() . "<br><br>";
    
    echo "Name : " . $kong->name . "<br>";
    echo "legs : " . $kong->leg . "<br>";
    echo "cold blooded : " . $kong->cold_blooded . "<br>";
    echo "Yell : " , $kong->yell(). "<br><br>";


   ?>
</body>
</html>