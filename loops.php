<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
<?php
/*
$i=1;
$n;
$f;
$f1;
$f2;
echo "Fibonnacci series upto n terms:";
do {
    echo "$f";
    $f2=$f1;
    $f2=$f;
    $f=$f1+$f2;
    $i++;
} while ($f <= 10);*/
?>

<?php
$num=407;
$total=0;
$x=$num;
while($x!=0)
{
    $rem=$x%10;
    $total=$total+$rem*$rem*$rem;
    $x=$x/10;
}
if($num==$total)
{
    echo "yes it is armstong";
}
else{
    echo "no it is not armstong";
}
?>

</body>

</html>