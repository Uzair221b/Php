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
    return "Not a prime number";
}
else {
    return "prime number";
}
}
echo prime(12);
?>
