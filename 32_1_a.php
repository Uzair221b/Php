<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime or Not</title>
</head>
<body>
    
</body>
</html>

<?php //Function prime or Not // page-32 // 1 assignment
      //without parameters Without return;
function prime()
{
$n=11;
$y=0;
    for ($i=2; $i<$n; $i++)
    {
        if($n%$i==0)
        {
            $y=1;
            break;
            
        }
    }
    if($y==1)
    {
        echo "Not a prime number";
    }
    else
    {
        echo "Prime number";
    }

}
 echo prime();
    ?>