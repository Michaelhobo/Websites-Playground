<?php
$directory = "../images/team/harry/";
if (glob($directory . "*.jpg") != false)
{
 $filecount = count(glob($directory . "*.jpg"));
 echo $filecount;
}
else
{
 echo 0;
}
?>