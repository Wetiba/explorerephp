<?php
//arithmertic operators
$num1=56;
$num= 92;
echo $num+$num1;  //addition
echo "<br>";
echo $num-$num1; //Substraction
echo "<br>";
echo $num*$num1; //Multiplication
echo "<br>";
echo $num/$num1; //Division
echo "<br>";
echo $num%$num1; //Modulus
echo "<br>";
// assignment operator
$num3=250;
$num3 +=87;
echo $num3;
echo "<br>";
//Comparison operator
$num4=780;
$num5="780";
var_dump($num4==$num5); //equals operator
echo "<br>";

var_dump($num4===$num5); //identical operator
echo "<br>";

var_dump($num4!=$num5);
$num6=200;
$num7=200;
//comparison operator
var_dump($num6>$num7); //greater