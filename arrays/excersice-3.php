<?php 

$dad = array(
    "hobbies" => array("working","tv","telling jokes"),
    "kind",
    "hard-worker",
    "gardener"
);

$me = array(
    'first name' => 'Banken',
    'name' => 'Nick',
    'age' => 23,
    'year' => 1995,
    'sad' => false,
    'happy' => true,
    "hobbies" => array("gaming","cooking","moddeling","theatre"),
    "father" => $dad
);

$soulmate = array(
    'first name' => 'Dirkx',
    'name' => 'Julie',
    'age' => 20,
    'year' => 1998,
    'sad' => false,
    'happy' => true,
    "hobbies" => array("gaming","cooking","drawing","painting","singing"),
    "father" => $dad
);

$child = array(
    "hobbies" => array("gaming","dancing","swimming")
);

$merge = array_merge($me["hobbies"],$soulmate["hobbies"],$child["hobbies"]);
array_push($me["hobbies"],"taxidermy");
array_replace($me['first name'] = "Peeters");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array - excersice 3</title>
</head>
<body>
<h3><?php print_r($merge)?></h3>
<h2><?php print_r(array_intersect($me["hobbies"],$soulmate["hobbies"]))?></h2>
<h2><?php echo "I got ".count($me["hobbies"])." hobbies. And my father has ".count($me["father"]["hobbies"])." hobbies." ?></h2>
<pre><h2><?php print_r($me)?></h2></pre>

</body>
</html>