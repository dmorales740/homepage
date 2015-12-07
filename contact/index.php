<?php   /* contact.php */

$contact = file_get_contents("contact.html");
$script = '<script> document.getElementById("Contact").classList.add("active"); </script>';
if(isset($_POST["ajax"]))
{
    echo $contact;
    die("");
}

include "http://darielmorales.com/html/header-top.html";
echo $contact;
echo $script;
include "http://darielmorales.com/html/footer-end.html";

?>