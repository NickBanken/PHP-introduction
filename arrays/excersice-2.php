<?php $me = array(
    'first name' => 'Banken',
    'name' => 'Nick',
    'age' => 23,
    'year' => 1995,
    'sad' => false,
    'happy' => true
);?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array - excersice 2</title>
</head>
<body>
<pre><h1><?php print_r($me) ;?></h1></pre>
<h1><?php  print_r($me['name']." ".$me['first name']);?></h1>
<h2>I am <?php  print_r($me['age']);?> years old</h1>
</body>
</html>