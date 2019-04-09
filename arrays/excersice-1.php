<?php 
$land = array ('Belgium', 'France', 'Germany', 'The Netherlands', 'Spain');
$dishes = array ('Spahgetti','Kebab','Fries','Schnitzel');
$movies = array ('The Book Of Life','My Little Pony','The Greatest Showman');
$series = array ('A Series Of Unfortunate Events','Sabrina','GoT');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array - excersice 1</title>
</head>
<body>
   <h1><?php print_r($movies[1].', '.$series[0].', '.$movies[2]) ?></h1>
</body>
</html>