<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>with parameters with return</title>
</head>

<body>

</body>

</html>
<?php   //Function prime or Not // page-32 // 1_b assignment
//with parameters With return;
function prime($x)
{
    $y = 0;
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            $y = 1;
            break;
        }
    }
    if ($y == 1) {
        return "Not a prime number";
    } else {
        return "prime number";
    }
}
echo prime(12);
?>