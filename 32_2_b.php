<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call By Refrence</title>
</head>
<body>
    
</body>
</html>
<?php
function swap(&$a, &$b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}
$b1 = 5;
$b2 = 10;
echo "Before calling the function swap:-<br>";
echo "The two values are:-" . $b1 . " " . $b2 . "<br>";
swap($b1, $b2);
echo "After calling the function swap:-<br>";
echo "The two values are:-" . $b1 . " " . $b2 . "<br>";
?>