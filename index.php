<?php

//Question number 1
$year = 1700;
if ($year % 100 == 0){
    if ($year % 400 == 0)
    echo "Q(1): $year is a leap year <br>";
    else  echo "Q(1): $year is not a leap year <br>";
}
else{
    if ($year % 4 == 0)
    echo "Q(1): $year is a leap year <br>";
    else  echo "Q(1): $year is not a leap year <br>";
}

//Question number 2
$tempreture = 20;
if ($tempreture < 20)
echo "Q(2): We are in winter <br>";
else echo "Q(2): We are in summer <br>";

//Question number 3
$x = 2;
$y =2;
if ($x == $y){
echo "Q(3): ".($x + $y)*3 ."<br>";
}
else 
echo "Q(3): ".$x + $y."<br>";

//Question number 4
$number = 200;
$difference = $number - 100;
if ($difference < 0){
    $difference *= -1;
echo "Q(4): ".$difference."<br>";
}
else {
$difference *= 3;
echo "Q(4): ".$difference."<br>";
}

//Question number 5
$a = 15;
$b = 30;
if ($a == 30 || $b == 30 || $a + $b == 30){
echo "Q(5): True <br>";
}
else echo "Q(5): False <br>";

//Question number 6
$c = 80;
if (abs($c - 100) <= 10 || abs($c - 200) <= 10){
    echo "Q(6): True <br>";
    }
else echo "Q(6): False <br>";

//Question number 7
$e = -14;
if ($e > 0) {
if ($e % 3 == 0 || $e % 7 == 0)
echo "Q(7): True <br>";
else echo "Q(7): False <br>";
}
else {
echo "Q(7): You must enter a positive number <br>";
}

//Question number 8
$d = explode(" ", "if lorem ipsum dolor sit amet, consectetur adipiscing elit");
if( $d[0] == "if"){
    echo "Q(8): The string unchanged <br>";
}
else {$d[0] = "if ".$d[0];
echo "Q(8): ".implode($d)."<br>";}

//Question number 9
$f="Hello World";
echo "Q(9): ".substr($f, 0,2)."<br>";

//Question number 10
$g = 90;
$h = 70;
if (($g >= 100 && $g <= 200) || ($h >= 100 && $h <= 200)){
echo "Q(10): At least one of entered numbers is in the range <br>";}
else echo "Q(10): Both two entered numbers aren't in the range <br>";

//Question number 11
if (($g >= 20 && $g <= 50) || ($h >= 20 && $h <= 50)){
echo "Q(11): At least one of entered numbers is in the range <br>";}
else echo "Q(11): Both two entered numbers aren't in the range <br>";

//Question number 12
$num1=10;
$num2=20;
$num3=15;
if($num1>$num2 && $num1>$num3){
echo "Q(12): The largest number is ".$num1."<br>";
}
else{
if($num2>$num1 && $num2>$num3){
echo "Q(12): The largest number is ".$num2."<br>";
}
else echo "Q(12): The largest number is ".$num3."<br>";
}

//Question number 13
$i= 20;
$j= 40;
$diff1 = abs($i - 100);
$diff2 = abs($j - 100);
if ($diff1 == $diff2)
echo "Q(13): 0 <br>";
elseif ($diff1 < $diff2)
echo "Q(13): The closest number to 100 is ".$i."<br>";
else echo "Q(13): The closest number to 100 is ".$j."<br>";

//Question number 14
$k = 15;
$l = 30;
if ($k == 5 || $l == 5 || $k + $l == 5 || abs($k - $l) == 5){
echo "Q(14): True <br>";
}
else echo "Q(14): False <br>";

?>