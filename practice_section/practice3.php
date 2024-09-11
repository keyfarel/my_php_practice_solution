<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice 3</title>
</head>
<body>

<?php

$num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

if (count($num) == 11) {
    echo "I love PHP";
} elseif (count($num) == 15) {
    echo "I am neutral";
} else {
    echo "Fucking PHP!!!";
}

echo "<br>
<h2>For Each Looping</h2>
<br>";

foreach ($num as $key => $value) {
    echo "looping-" . ($key + 1) . ": " . $value . "<br>";
}

echo "<br><br>";

$fifthNum = $num[4];

switch ($fifthNum) {
    case 1:
        echo "I love PHP";
        break;
    case 2:
        echo "I am neutral";
        break;
    case 3:
        echo "Fucking PHP!!!!!";
        break;
    case 4:
        echo "I am very hateful on PHP!!!!!";
        break;
    case 5:
        echo "FUCKKKKKKKKKKKKKKKK!!!";
        break;
    default:
        echo "You are still in PHP";
        break;
}
?>

</body>
</html>