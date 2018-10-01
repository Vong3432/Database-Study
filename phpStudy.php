<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


echo "<a href='https://www.tutorialrepublic.com/php-tutorial/php-mysql-connect.php'>Notes are all from here</a>";
echo "<h1>Switch Array</h1>";
$today = date("D");

switch($today){
	case "Mon":
		echo "Today is Monday.Clean your house.";
		break;
		case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}

echo "<br>";

echo "<h1>Normal Array</h1>";
echo "('Red','Green','Blue').<br>"; 
$colors = array("Red","Green","Blue");

echo "Array of 0: ".$colors[0]."<br>";
echo "Array of 1: ".$colors[1]."<br>";
echo "Array of 2: ".$colors[2]."<br>";

echo "<h1>Sort Array:</h1>";
sort($colors);
print_r($colors);




$ages = array('John' => 12 , "Vong" => 18 );
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);

echo "<h1>Multimentional Array</h1>";
echo "print_r method gives the output below:<br>";
echo "************************************<br>";
print_r($contacts);
echo "<br><br>";
echo "From array[0],Peter Parker's email is ".$contacts[0]["email"]."<br>";

echo "<h1>Display the ages Array</h1>";
print_r($ages);
echo "<br>";

echo "<h1>Display the ages Array with its datatype</h1>";
var_dump($ages);
echo "<br>";

?>
</body>
</html>