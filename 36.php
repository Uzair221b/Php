<?php
$cars[0]="Samrat";
$cars[1]="Ritesh";
$cars[2]="Shaista";
$cars[3]="Ram";
$cars[4]="Hritika";
$cars[5]="Z";
$arrlenth=count($cars);
for ($x=0; $x < $arrlenth; $x++) { 
    echo "<br>".$cars[$x];
    echo "<BR>$_SERVER[PHP_SELF]<BR>";
    echo "<BR>$_SERVER[GATEWAY_INTERFACE]<BR>";
    echo "<BR>$_SERVER[SERVER_ADDR]<BR>";
    echo "<BR>$_SERVER[SERVER_NAME]<BR>";
    echo "<BR>$_SERVER[SERVER_SOFTWARE]<BR>";
    echo "<BR>$_SERVER[SERVER_PROTOCOL]<BR>";
    echo "<BR>$_SERVER[REQUEST_METHOD]<BR>";
    echo "<BR>$_SERVER[REQUEST_TIME]<BR>";
    echo "<BR>$_SERVER[QUERY_STRING]<BR>";
    echo "<BR>$_SERVER[HTTP_ACCEPT]<BR>";
    echo "<BR>$_SERVER[REMOTE_ADDR]<BR>";
    echo "<BR>$_SERVER[REMOTE_PORT]<BR>";
    echo "<BR>$_SERVER[SERVER_ADMIN]<BR>";
}
?>