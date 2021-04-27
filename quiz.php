<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$q1 = $_POST["1"];
$q2 = $_POST["2"];
$q3 = $_POST["3"];
$q4 = $_POST["4"];
$q5 = $_POST["5"];
$total = 0;

if (isset($q1) && $q1=="4") $total++;
if (isset($q2) && $q2=="Polaris") $total++;
if (isset($q3) && $q3=="93 million miles") $total++;
if (isset($q4) && $q4=="Ganymede") $total++;
if (isset($q5) && $q5=="A black hole") $total++;

echo "<p>1: How many gaseuous planets are in our solar system?";
echo "<br> You answered: $q1";
echo "<br> Correct answer: 4</p>";

echo "<p>2: What is the astronomical name of the North Star?";
echo "<br> You answered: $q2";
echo "<br> Correct answer: Polaris</p>";

echo "<p>3: How far is an astronomical unit (the distance to the sun)?";
echo "<br> You answered: $q3";
echo "<br> Correct answer: 93 million miles</p>";

echo "<p>4: What is the name of the largest moon in the solar system?";
echo "<br> You answered: $q4";
echo "<br> Correct answer: Ganymede</p>";

echo "<p>5: The center of nearly every large galaxy contains what?";
echo "<br> You answered: $q5";
echo "<br> Correct answer: A black hole</p>";

$percent = $total * 20;
echo "<p>You got $total / 5: $percent %.</p>";
if($total == 5) echo "<p>Well done! Perfect score!</p>";

?>