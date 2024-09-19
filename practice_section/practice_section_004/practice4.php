<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice 4</title>
</head>
<body>

<?php

function sumNumber($num1, $num2) {
    return $num1 + $num2;
}

function getName(){
    $firstName = "Key";
    $lastName = "Farel";
    $fullName = $firstName . " " . $lastName;
    return $fullName;
}


echo "Sum: " . sumNumber(2, 4);
echo "<br><br>";
echo "full name: " . getName();
?>

</body>
</html>


