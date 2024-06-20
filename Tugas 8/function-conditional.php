<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport"content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible"content="ie=edge">
 <title>Function</title>
 </head>
 <body>
 <h1>Berlatih Function PHP</h1>
 <?php
 echo"<h3>Soal No 1 Greetings</h3>";
 /*
 SoalNo1
 Greetings
 Buatlah sebuah function greetings()yang menerima satu parameter berupa string.
 contoh:greetings("abduh");
 Output:"HaloAbduh, Selamat Datang di Garuda Cyber Institute!"*/
 function greetings($name) {
    return "Halo $name, Selamat Datang di Garuda Cyber Institute!";
}

echo greetings("Bagas"). "<br>";
echo greetings("Wahyu"). "<br>";
echo greetings("Muhammad Fakhri Andriza"). "<br>";
echo"<br>";
 echo"<h3>Soal No 2 Reverse String</h3>";
 /*
 SoalNo2
 Revers eString
 Buatlah sebuah function reverse String()untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping(for/while/dowhile).
 Function reverse String menerima satu parameter berupa string.
 NB:DILARANG menggunakan built-infunctionPHPsepertstrrev(),HANYA gunakan LOOPING!
 reverse String("abdul");
 Output: ludba
 */
 //Code function disini
 function reverseString($str) {
    $result = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $result.= $str[$i];
    }
    return $result;
}
echo reverseString("MuhammadFakhriAndriza"). "<br>";
echo reverseString("GarudaCyberInstitute"). "<br>";
echo reverseString("WeAreGC-InsDeveloper"). "<br>";

 echo"<h3>Soal No 3 Palindrome</h3>";
 /*
 SoalNo3
 Palindrome
 Buatlah sebuah function yang menerima parameter berupa string yang mengecekapakah string tersebut sebuah palindrome atau bukan.
 Palindrome adalah sebuah kata atau kalimat yang jika dibalikakan memberikan kata yang sama contohnya:katak,civic.
 Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
 NB:
 Contoh:
 palindrome("katak")=>output :"true"
 palindrome("jambu")=>output :"false"
 NB:DILARANG menggunakan built-infunction PHP seperti strrev()dll.Gunakan looping seperti biasa atau gunakan function reverse Stringdari jawabanno.2!
 */
 //Codefunctiondisini
 //Hapuskomentardibawahiniuntukjalankancode

 function palindrome($str) {
    $reversedStr = reverseString($str);
    return $str === $reversedStr;
 }
 echo palindrome("civic") ? "true" : "false";
 echo "<br>";
 echo palindrome("nababan") ? "true" : "false";
 echo "<br>";
 echo palindrome("jambaban") ? "true" : "false";
 echo "<br>";
 echo palindrome("racecar") ? "true" : "false";
 echo "<br>";
 echo"<h3>Soal No4 Tentukan Nilai</h3>";
 /*
 Soal4
 buatlah sebuah function bernama tentukan_nilai .Didalam function tentukan_nilai yang menerima parameter
 berupa integer.dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String“Sangat Baik”
 Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama
 dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
 */
 //Code function disini
 //Hapus komentar dibawah ini untuk jalankan code

echo tentukan_nilai(98);
echo tentukan_nilai(76);
echo tentukan_nilai(67);
echo tentukan_nilai(43);
 function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik <br>";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik <br>";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup <br>";
    } else {
        return "Kurang";
    }
}

 ?>
 </body>
 </html>