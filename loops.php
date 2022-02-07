<?php

//While loop

$num=5;  //initizilizes my loop

while ($num<=15){  //continue repeating as long is true
    echo "Nambari ni: $num <br> ";
    $num+=2; //increase loop by 2 for each
}

echo "<br>";
// do... while loop
$num2=11;

do{
    echo "Nambari ni : $num2 <br>";
    $num2++;
}while($num2<=20);

echo "<br>";

//for init counter,test counter,increment/decrement counter
for ($num3=2;$num3<=11;$num3++){
    echo "Nambari ni : $num3 <br>";
}
