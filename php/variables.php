<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$variableOne = 100;
$variableTwo = 200;
$result;

//add 
$resultAdd = $variableOne + $variableTwo;
//sustr
$resultSustration = $variableOne - $variableTwo;
//mult
$resultMultiplication = $variableOne * $variableTwo;
//divi
$resultDivision = $variableOne / $variableTwo;

print "El resultado de la suma es: ".$resultAdd;
print "<br>";
print "El resultado de la resta es: ".$resultSustration;
print "<br>";
print "El resultado de la multiplicación es: ".$resultMultiplication;
print "<br>";
print "El resultado de la división es: ".$resultDivision;

print "<br>";
print "<br>";


if ($resultAdd == 300) {
    echo "correct";
}

print "<br>";
print "<br>";

if ($resultAdd > 100) {
    echo "This is bigger than 100";
} else {
    echo "This is lower than 100";
}

print "<br>";
print "<br>";

$firstName = "Claudia";
$lastName = "Zermeño";

$fullName = $firstName." ".$lastName;

print $fullName;

/*
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
*/

?>
    
</body>
</html>

