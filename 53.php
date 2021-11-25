<?php
$nameerr= $emailerr= $gendererr= $websiteerr="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if(empty($_POST["name"])){
        $nameerr="Name is required";
        echo $nameerr;
    }
    else {
        $name=$_POST["name"];
        echo $name;
    }
}
?>