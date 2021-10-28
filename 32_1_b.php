<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>With parameters without return</title>
</head>
<body>
    
</body>
</html>
<?php
function prime($x){
    $y=0;
    for ($i=2; $i<$x; $i++) { 
        if ($x%$i==0) {
            $y=1;
            break;
        }
    }
    if ($y==1) {
        echo "Not a prime number";
    }
    else {
        echo "prime number";
    }
    }
    echo prime(11);
    ?>