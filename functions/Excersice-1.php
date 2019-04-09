<?php
    function getName($name){
        echo "<p>Your name is: $name! Hello there.</p>";
	echo '<hr>';
    }




    getName("Sunny");
    getName("Ralph");
    getName("Pooh Bear");

    echo date('d m y');
    echo "<hr>";



    $text = "I wanna be a";
    $word = "Dinosaur";
    $word = str_shuffle($word);
    

    echo $text.$word.".";


 
?>

