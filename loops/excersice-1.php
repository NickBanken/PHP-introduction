

<!-- For loop with php -->
<?php

    $people = 21;
    echo "<h2>For loop</h2>";
    for($i = 1; $i < 10; $i++){
        echo "$i. Hello world! <br>";
    }
    echo "<br>";
    ?>



<!-- while loop in php -->

<?php
    $age = 1;
    echo "<h2>While loop</h2>";
    while($age <= 23){
        echo "Happy Birthday! You are $age years old <br>";
        $age++;
    }
    echo "<br>";
?>


<!-- For each loop -->

<?php
$color = array("red","blue","green","yellow","purple");
echo "<h2>For each</h2>";
foreach($color as $value){
    echo "I got this color of paint: $value <br>";
}
echo "<br>";
    ?>