<?php 

// five subject marks
$bangla = 40;
$english = 40;
$math = 40;
$physics = 40;
$chemistry = 33;

// marks validation function
function limit($data, $min = 0, $max = 100)
{
    return $data >= $min && $data <= $max;
}

function failMark($data, $mark = 33) {
    return $data < $mark;
}

// marks limitation error
if (!limit($bangla) OR !limit($english) OR !limit($math) OR !limit($physics) OR !limit($chemistry)) {
    echo "Invalid Marks! Sorry your marks should be between 0 to 100.";
    die();
}

// if any subject fail than print fail massage
if (failMark($bangla) OR failMark($english) OR failMark($math) OR failMark($physics) OR failMark($chemistry)) {
    echo "Sorry you are fail";
    echo "</br>";
    echo "</br>";
    echo "Your Grade : F";
    die();
}

// Calculate total marks
$totalMarks = $bangla + $english + $math + $physics + $chemistry;

echo "Total Marks : " . $totalMarks;

// Calculate average marks
$averageMarks = $totalMarks / 5;

echo "</br>";
echo "</br>";

echo "Average Marks : " . $averageMarks;


echo "</br>";
echo "</br>";

// defined grade 
switch ($averageMarks) {   
    case ($averageMarks >= 80 && $averageMarks <= 100):
        echo "Grade : A+";
        break;
    case ($averageMarks >= 70 && $averageMarks <= 79):
        echo "Grade : A";
        break;
    case ($averageMarks >= 60 && $averageMarks <= 69):
        echo "Grade : A-";
        break;
    case ($averageMarks >= 50 && $averageMarks <= 59):
        echo "Grade : B";
        break;
    case ($averageMarks >= 40 && $averageMarks <= 49):
        echo "Grade : C";
        break;
    case ($averageMarks >= 33 && $averageMarks <= 39):
        echo "Grade : D";
        break;
    default:
        echo "Something wrong";
}