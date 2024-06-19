<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport"content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible"content="ie=edge">
 <title>Array</title>
 </head>
 <body>
 <h1>BerlatihArray</h1>
 <?php
 echo"<h3>Soal 1</h3>";
 /*
 SOALNO1
 Kelompokkannama-namadibawahinikedalamArray.
 Kids:"Mike", "Dustin","Will", "Lucas","Max","Eleven"
 Adults: "Hopper","Nancy", "Joyce","Jonathan","Murray"
 */
 $kids = ["Mike", "Dustin", "Will", "Lukas", "Max", "Eleven"]; //Lengkapidi sini
 $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"]; //Lengkapidi sini
 echo "kids: ", $kids[0], ", ", $kids[1], ", ", $kids[2], ", ", $kids[3], ", ", $kids[4], ", ", $kids[5] , "<br>";
 echo "adults: ", $adults[0], ", ", $adults[1], ", ", $adults[2], ", ", $adults[3], ", ", $adults[4], "<br>";

 echo"<h3>Soal 2</h3>";
 /*
 SOALNO2
 Tunjukkan panjang Array diSoal No1 dan tampilkan isi dari masing-masing Array.
 */
 echo"Cast Stranger Things: ";
 echo"<br>";
 echo "TotalKids: ", count($kids); //Berapa panjang array kids
 echo"<br>";
 echo"<ol>";
 echo"<li>$kids[0]</li>";
 for ($i = 1; $i < count($kids); $i++){
    echo"<li>$kids[$i]</li>";
 }
 //Lanjutkan
 echo"</ol>";
 echo"TotalAdults: ", count($adults); //Berapa panjang array adults
 echo"<br>";
 echo"<ol>";
 echo"<li>$adults[0]</li>";
 for ($i = 1; $i < count($adults); $i++){
    echo"<li>$adults[$i]</li>";
 }
 //Lanjutkan
 echo"</ol>";
 /*
 SOALNo3
 Susun data-data berikut ke dalam bentuk Asosiatif Array di dalam Array Multidimensi
 Name: "WillByers"
 Age: 12,
 Aliases: "WilltheWise"
 Status: "Alive"
 Name: "MikeWheeler"
 Age: 12,
 Aliases: "DungeonMaster"
 Status: "Alive"
 Name: "JimHopper"
 Age:43,
 Aliases: "ChiefHopper"
 Status: "Deceased"
Name: "Eleven"
 Age: 12,
 Aliases: "El"
 Status: "Alive"
 Output:
 Array
 (
 [0]=>Array
 (
 [Name]=>WillByers
 [Age]=>12
 [Aliases]=>WilltheWise
 [Status]=>Alive
 )
 [1]=>Array
 (
 [Name]=>MikeWheeler
 [Age]=>12
 [Aliases]=>DugeonMaster
 [Status]=>Alive
 )
 [2]=>Array
 (
 [Name]=>JimHooper
 [Age]=>43
 [Aliases]=>ChiefHopper
 [Status]=>Deceased
 )
 [3]=>Array
 (
 [Name]=>Eleven
 [Age]=>12
 [Aliases]=>El
 [Status]=>Alive
 )
 )
 */
echo "<h3>Soal 3</h3>";
$bio = array (
    array("Name" => "Will Byers", "Age" => "12", "Aliases" => "Will the Wise", "Status" => "Alive"),
    array("Name" => "Mike Wheeler", "Age" => "12", "Aliases" => "Dungeon Master", "Status" => "Alive"),
    array("Name" => "Jim Hopper", "Age" => "43", "Aliases" => "Chief Hopper", "Status" => "Deceased"),
    array("Name" => "Eleven", "Age" => "12", "Aliases" => "El", "Status" => "Alive")
);
    echo "<pre>";
    print_r($bio);
    echo "</pre>";
 ?>
 </body>
 </html>