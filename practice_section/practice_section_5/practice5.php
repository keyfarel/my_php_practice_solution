<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice 5</title>
</head>
<body>

<?php

function checkMax(){

    $num = [2, 3, 4, 5, 6, 7, 8, 9];

    return max($num);
}

function sumStringLen() {

    $name = "Key Farel";
    return strlen($name);
}

function sortArray() {
    $arr = [26, 19, 20, 50, 27, 12];
    sort($arr);
    return $arr;
}

echo checkMax();
echo "<br>";
echo sumStringLen();
echo "<br>";
print_r(sortArray());
?>

</body>
</html>