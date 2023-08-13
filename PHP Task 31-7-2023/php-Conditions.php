<?php 
print ("1.	Write a PHP script to see if the specified year is a leap year or not.");

echo "</br>";
echo "</br>"; 

$year = 1997;

echo ($year % 4==0) ? "This year is a leap year" : "This year is not a leap year";

echo "</br>";
echo "</br>"; 

// Other way:

    // if ($year % 4 == 0 ) {
    //     echo "This year is a leap year";
    // } else {
    //     echo "This year is not a leap year";
    // };


print ("2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.");

echo "</br>";
echo "</br>"; 

$temperature =27;

echo ($temperature>20) ? "It is summertime!" : "It is wintertime!";

echo "</br>";
echo "</br>"; 

// Other way:

    // if ($temperature>20) {
    //     echo "It is summertime!";
    // } else {
    //     echo "It is wintertime!";
    // };

print ("3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.");

echo "</br>";
echo "</br>"; 

$firstInteger=2;
$secondInteger =2;

echo ($firstInteger==$secondInteger) ? ($firstInteger+$secondInteger)*3 : "firstInteger not equal socandInteger";

echo "</br>";
echo "</br>"; 

// Other way:

    // if ($firstInteger==$secondInteger) {
    //     echo $firstInteger+$secondInteger)*3;
    // } else {
    //     echo "firstInteger not equal socandInteger";
    // };


print ("4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false");


echo "</br>";
echo "</br>"; 

$firstInteger1=10;
$secondInteger1 =10;

echo (($firstInteger1+$secondInteger1)==30) ? ($firstInteger1+$secondInteger1) : "false";

echo "</br>";
echo "</br>";

// Other way:

    // if ($firstInteger1+$secondInteger1)==30) {
    //     echo ($firstInteger1+$secondInteger1);
    // } else {
    //     echo "false";
    // };



print ("5.	Write in PHP script to check if the given positive number is a multiple of 3.");

echo "</br>";
echo "</br>"; 

$number=20;

echo ($number % 3 == 0) ? "true" : "false";

echo "</br>";
echo "</br>";

// Other way:

    // if ($number % 3 == 0) {
    //     echo "true";
    // } else {
    //     echo "false";
    // };


print ("6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.");

echo "</br>";
echo "</br>"; 
    
$number=50;
    
echo ($number>=20 && $number<=50) ? "true" : "false";
    
echo "</br>";
echo "</br>";

// Other way:

    // if ($number>=20 && $number<=50) {
    //     echo "true";
    // } else {
    //     echo "false";
    // };



print ("7.	Write PHP script to find the largest number between the three integers");

echo "</br>";
echo "</br>"; 

$numberOne = 1;
$numberTwo = 5;
$numberThree = 9; 

function findLargestNumber($num1, $num2, $num3) {
    $largest = $num1;

    if ($num2 > $largest) {
        $largest = $num2;
    }

    if ($num3 > $largest) {
        $largest = $num3;
    }

    return $largest;
}

$largestNumber = findLargestNumber($numberOne, $numberTwo, $numberThree);

echo $largestNumber;

echo "</br>";
echo "</br>";    

print ("8.	Write PHP script to calculate the monthly electricity bill according to these rules");

echo "</br>";
echo "</br>"; 

$units= 300;

switch ($units){
    case ($units<50 ):
        echo $units* 2.50;
        break;
    case ($units>50 && $units<150):
        echo $units* 5;
        break;  
    case ($units>150 && $units<250):
            echo $units* 6.20;
        break;  
    case ($units>250):
            echo $units* 7.50;
        break; 
}

echo "</br>";
echo "</br>"; 

print ("9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.");

echo "</br>";
echo "</br>"; 

$age =15;

echo ($age>18) ? "is eligible to vote" : "is no eligible to vote";

echo "</br>";
echo "</br>"; 

print ("10.	Write php script  to check whether a number is positive, negative or zero");

echo "</br>";
echo "</br>"; 

$input=-60;

 if ($input>0) {
        echo "positive";
    } if ($input==0) {
        echo "zero";
    } else {
        echo "Negative";
    }
    
echo "</br>";
echo "</br>"; 

print ("11.	Write php script to make a calculator, the calculator should contain the four main operations ");
  
// $num1=10;
// $num2=20;

// switch ($operations){
//     case "+":
//       echo  $result = $num1 + $num2;
//         break;
//     case "-":
//         echo  $result = $num1 - $num2;
//         break;
//     case "*":
//         echo  $result = $num1 * $num2;
//         break; 
//     case "/":
//         echo  $result = $num1 / $num2;
//         break;        
// }

echo "</br>";
echo "</br>";


print ("11.	Write php script to make a calculator, the calculator should contain the four main operations ");


echo "</br>";
echo "</br>";
  
$input = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$avg = array_sum($input) / count($input); 

if ($avg <= 60) {
    echo "F";
} elseif ($avg <= 70) {
    echo "D";
} elseif ($avg <= 80) {
    echo "C";
} elseif ($avg <= 90) {
    echo "B";
} else {
    echo "A";
}

?>