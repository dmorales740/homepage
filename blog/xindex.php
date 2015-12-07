<?php      /* blog.php */

$blog = file_get_contents("blog.html");
$script = '<script> document.getElementById("Blog").classList.add("active"); </script>';
if(isset($_POST["ajax"]))
{
    echo $blog;
    die("");
}

include "http://darielmorales.com/html/header-top.html";
echo $blog;
echo $script;
include "http://darielmorales.com/html/footer-end.html";