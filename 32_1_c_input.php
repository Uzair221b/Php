<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_REQUEST['num'];
        $y = 0;
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $y = $y+1;
            }
        }
        if ($y == 2) {
            echo "Not a prime number";
        } else {
            echo "Prime number";
        }
    }
    ?>
</body>

</html>