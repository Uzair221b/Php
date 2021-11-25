<?php
if(!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $IP_add=$_SERVER['HTTP_CLIENT'];
}
    elseif(!empty($_SERVER['HTTP_X_FORWARD_FOR']))
    {
        $IP_add=$_SERVER['HTTP_X_FORWARD_FOR'];
    }
    else
    {
        $IP_add=$_SERVER['REMOTE_ADDR'];
    }
    echo $IP_add;
    ?>
    
