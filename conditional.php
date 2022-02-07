<?php
//if statement

$num=54;
if ($num>7){
    echo "The answer is true";
}
echo "<br>";
//if... else statement
$num1=65;
$num2=17;

if ($num1<=$num2 && $num2=65){
    echo "The answer is true";
}else{
    echo "The answer is false";
}

//if ....elseif else statement

//$masaa= date("H");
//if ($masaa<"9"){
//    echo "Ni asubui";
//}elseif ($masaa<"21"){
//    echo "Ni jioni";
//
//
//}else{
//    echo "Ni isiku";
//}
$grade=67;
if ($grade<=39){
    echo "You have failed";
}elseif ($grade<=59 and $grade>=40){
    echo "Thats a pass";
}elseif ($grade<=80 && $grade>=60){
    echo "Thats Credit";
}




