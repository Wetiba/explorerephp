<?php
 function hesabu(){  //creating a function
     $num=45;
     $num2=22;

     echo $num + $num2;

 }
 hesabu();  //Calling a function
echo "<br>";

echo pi(); //inbuild function.

//now lets create a function with some arguements

function explorer( $jina,$miaka){
    echo "$jina Alizaliwa $miaka <br>";
}
explorer("Erick",1980);
explorer("susan",2000);
explorer("Christine",2001);
explorer("Charles",1997);





