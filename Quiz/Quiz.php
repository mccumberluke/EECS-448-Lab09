<?php

$kansas1 = $_POST["kansas1"];
$kansas2 = $_POST["kansas2"];
$kansas3 = $_POST["kansas3"];
$kansas4 = $_POST["kansas4"];
$kansas5 = $_POST["kansas5"];

echo "Question 1: Where is the University of Kansas?<br>";
echo "You answered: " . $kansas1 . "<br>";
echo "Correct answer: Lawrence<br>";
echo "<br>";

echo "Question 2: My favorite NFL team is?<br>";
echo "You answered: " . $kansas2 . "<br>";
echo "Correct answer: Chiefs<br>";
echo "<br>";

echo "Question 3: The best sport at KU is?<br>";
echo "You answered: " . $kansas3 . "<br>";
echo "Correct answer: Basketball<br>";
echo "<br>";

echo "Question 4: My favorite TV show is?<br>";
echo "You answered: " . $kansas4 . "<br>";
echo "Correct answer: Peaky Blinders<br>";
echo "<br>";

echo "Question 5: EECS 448 is the best class?<br>";
echo "You answered: " . $kansas5 . "<br>";
echo "Correct answer: Yes<br>";
echo "<br>";

$grade = 0;
if($kansas1 == "Lawrence"){
    $grade += 1;
}
if($kansas2 == "Chiefs"){
    $grade += 1;
}
if($kansas3 == "Basketball"){
    $grade += 1;
}
if($kansas4 == "Peaky Blinders"){
    $grade += 1;
}
if($kansas5 == "Yes"){
    $grade += 1;
}
$percent = $grade / 5 * 100;
echo "<br>Answered correctly: ".$grade."/5";
echo "<br>Percentage: ".$percent."%";
?>