<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Užduotis 1";
$name = "Valdas";
$surname = "Nazarovas";
$birthYear = 1996;
$currentYear = 2021;
$age = $currentYear - $birthYear;
echo  "<br>Aš esu" . " " . $name . " " . $surname . "." . " " . "Man yra" . " " . $age . " " . "metai" . ".";

echo "<br><br>Užduotis 2";
$random1 = rand(0, 4);
$random2 = rand(0, 4);
$biggestNumber = max($random1, $random2);
$smallestNumber = min($random1, $random2);
$result = $smallestNumber == 0 ? 0 : $biggestNumber / $smallestNumber; 
echo "<br>" . round($result, 2);

echo "<br><br>Užduotis 3";
$number1 = rand(0, 25);
$number2 = rand(0, 25);
$number3 = rand(0, 25);
$median = max(min($number1, $number2), min(max($number1, $number2), $number3));
echo "<br>" . $median;

echo "<br><br>Užduotis 4";
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "<br>Sudaryti trikampį galima.";
} else {
    echo "<br>Sudaryti trikampio negalima.";
}

echo "<br><br>Užduotis 5";
$var1 = rand(0, 2);
$var2 = rand(0, 2);
$var3 = rand(0, 2);
$var4 = rand(0, 2);
preg_match_all("/\d+/", $var1, $matches);
echo "<br>" . count($matches);


echo "<br><br>Užduotis 6";
$randomNum = rand(1, 6);
if ($randomNum == 1 ) {
    echo "<h1>$randomNum</h1>";
}
elseif ($randomNum == 2) {
    echo "<h2>$randomNum</h2>";
}
elseif ($randomNum == 3) {
    echo "<h3>$randomNum</h3>";
}
elseif ($randomNum == 4) {
    echo "<h4>$randomNum</h4>";
}
elseif ($randomNum == 5) {
    echo "<h5>$randomNum</h5>";
}
else {
    echo "<h6>$randomNum</h6>";
}

echo "<br><br>Užduotis 7";
$firstNumber = rand(-10, 10);
$secondNumber = rand(-10, 10);
$thirdNumber = rand(-10, 10);
$green = "green";
$red = "red";
$blue = "blue";
if ($firstNumber < 0 ) {
    echo "<br><span style=\"color:{$green}\">$firstNumber<span>";
}
elseif ($firstNumber == 0 ) {
    echo "<br><span style=\"color:{$red}\">$firstNumber<span>";
}
else {
    echo "<br><span style=\"color:{$blue}\">$firstNumber<span>";
}


if ($secondNumber < 0 ) {
    echo "<br><span style=\"color:{$green}\">$secondNumber<span>";
}
elseif ($secondNumber == 0 ) {
    echo "<br><span style=\"color:{$red}\">$secondNumber<span>";
}
else {
    echo "<br><span style=\"color:{$blue}\">$secondNumber<span>";
}

if ($thirdNumber < 0 ) {
    echo "<br><span style=\"color:{$green}\">$thirdNumber<span>";
}
elseif ($thirdNumber == 0 ) {
    echo "<br><span style=\"color:{$red}\">$thirdNumber<span>";
}
else {
    echo "<br><span style=\"color:{$blue}\">$thirdNumber<span>";
}


echo "<br><br><span style=\"color:black\">Užduotis 8<span>";


echo "<br><br>Užduotis 9";
$numbers1 = rand(0, 100);
$numbers2 = rand(0, 100);
$numbers3 = rand(0, 100);
$averageBefore = $numbers1 + $numbers2 + $numbers3;
$averageBefore = $averageBefore / 3;
$averageBefore = round($averageBefore);
//neveikia
// $averageAfter = 1;
// if ($numbers1 < 10 || $numbers1 > 90 ) {
//     $averageAfter = $numbers2 + $numbers3 / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
// elseif ($numbers2 < 10 || $numbers2 > 90) {
//     $averageAfter = $numbers1 + $numbers3 / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
// elseif ($numbers3 < 10 || $numbers3 > 90 ) {
//     $averageAfter = $numbers1 + $numbers2 / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
// elseif ($numbers1 && $numbers2 < 10 || $numbers1 && $numbers2 > 90 ) {
//     $averageAfter = $numbers3 / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
// elseif ($numbers1 && $numbers3 < 10 || $numbers1 && $numbers3 > 90 ) {
//     $averageAfter = $numbers2 / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
// elseif ($numbers2 && $numbers3 < 10 || $numbers2 && $numbers3 > 90 ) {
//     $averageAfter = $numbers1 / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
// else {
//     $averageAfter = $numbers1 + $numbers2 + $numbers3;
//     $averageAfter = $averageAfter / 3;
//     $averageAfter = round($averageAfter);
//     echo "<br>$averageAfter<br>";
// }
echo "<br>$averageBefore";



echo "<br><br>Užduotis 10<br>";
$hours = rand(0, 23);
$hours = sprintf("%02d", $hours);
$minutes = rand(00, 59);
$minutes = sprintf("%02d", $minutes);
$seconds = rand(00, 59);
$seconds = sprintf("%02d", $seconds);
$total = $hours + $minutes + $seconds;
echo $total;
$addedNumber = rand(0, 300);
//nebaigta


?>

</body>
</html>