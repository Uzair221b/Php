<?php
echo "Today is" . "&nbsp" . date("d/m/y") . "<br>";
echo "Today is" . "&nbsp" . date("year/month/day") . "<br>";
echo "Today is" . "&nbsp" . date("r") . "<br>";
echo "Today is" . "&nbsp" . date("d/m/y") . "&nbsp" . "Current time is" . "&nbsp" . date("h:i:sa") . "<br>";
$d = mktime(11, 14, 54, 8, 12, 2014);
echo  "Created Date is" . "&nbsp" . date("d/m/y h:i:sa" . $d) . "<br>";
$g = strtotime("2:24pm november 21 2021");
echo "Created Date with string is" . "&nbsp" . date("d/m/y h:i:sa") . "<br>";
$d = strtotime("Tomorrow");
echo "Tomorrow will be" . "&nbsp" . date("d/m/y h:i:sa", $d)."<br>";


echo "month is"."&nbsp".date("F")."<br>";
echo "month is"."&nbsp".date("m")."<br>";
echo "month is"."&nbsp".date("n")."<br>";
echo "month is"."&nbsp".date("M")."<br>";



echo "Year is"."&nbsp".date("Y")."<br>";
echo "Year is"."&nbsp".date("y")."<br>";


echo "Weak Day is"."&nbsp".date("D")."<br>";
echo "Weak Day is"."&nbsp".date("I")."<br>";
echo "Weak Day is"."&nbsp".date("N")."<br>";
echo "Weak Day is"."&nbsp".date("w")."<br>";


echo "no of Days in Year".date("z")."<br>";

echo "Weak Day is"."&nbsp".date("w")."<br>";
echo date_default_timezone_set("Asia/Seoul (UTC+9)");
echo "Current Time in seoul"."&nbsp".date("h:i:sa")."<br>";