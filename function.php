<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>
<?php  //withoout parameters & without return();
function sum()
{
    $a = $_GET['num1'];
    $b = $_GET['num2'];
    $c = $a + $b;
    echo "Funtion calling withoout parameters & without return =$c";
}
sum();
?>

<?php   //withoout parameters & with return();
function fun()
{
    $a = $_GET['num3'];
    $b = $_GET['num4'];
    $c = $a + $b;
    return $c;
}

$y = fun();
echo "<br>Funtion calling withoout parameters & with return =$y";
?>


<?php  //with parameters & without return();
function gum($x, $y)
{
    $z = $x + $y;
    echo "<br>Funtion calling with parameters & without return =$z";
}

gum(20, 20);
?>

<?php  //with parameters & with return();
function gun($f, $g)
{
    $h = $f + $g;
    return $h;
}

$y = gun(10, 10);
echo "<br>function calling with parameters & with return =$y";
?>