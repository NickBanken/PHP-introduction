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


$web_development =array(
    "front-end" => array("xhtml","CSS","Javascript"),
    "back-end" => array("Ruby on rails","flash")
);

array_replace($web_development["front-end"][0]="html");
array_splice($web_development["back-end"],1,1);

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
<pre><h2><?php print_r($web_development)?></h3></pre>
<pre><h2><?php print_r($merge)?></h3></pre>
<pre><h2><?php print_r(array_intersect($me["hobbies"],$soulmate["hobbies"]))?></h2></pre>
<pre><h2><?php echo "I got ".count($me["hobbies"])." hobbies. And my father has ".count($me["father"]["hobbies"])." hobbies." ?></h2></pre>
<pre><h2><?php print_r($me)?></h2></pre>

</body>
</html>