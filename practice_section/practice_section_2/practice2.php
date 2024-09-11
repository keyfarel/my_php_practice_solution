<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice 2</title>
</head>
<body>

<?php
$number1 = 10;
$number2 = 20;

echo $number1 + $number2;
echo "<br><br>";

$name = array("Key", "Firdausi", "Alfarel");
echo "<pre>";
print_r($name);
echo "</pre>";
echo "<br>";

$fullName = array("First" => "Key"
, "Middle" => "Firdausi"
, "Last" => "Alfarel");

echo "<pre>";
print_r($fullName);
echo "</pre>";

?>

</body>
</html>