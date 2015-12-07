<?php   /* home.php */

$home = file_get_contents("home.html");
$script = '<script> document.getElementById("Home").classList.add("active"); </script>';

include "http://darielmorales.com/html/header-top.html";
echo $home;
echo $script;
include "http://darielmorales.com/html/footer-end.html";

?>