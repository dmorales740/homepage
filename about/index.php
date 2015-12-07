<?php   /* about.php */

$about = file_get_contents("about.html");
$script = '<script> document.getElementById("About").classList.add("active"); </script>';
if(isset($_POST["ajax"]))
{
    echo $about;
	echo '<script>$(".imgLiquid").imgLiquid({fill: false, verticalAlign: "top"}); </script>';
    die("");
}

include "http://darielmorales.com/html/header-top.html";
echo $about;
echo $script;
include "http://darielmorales.com/html/footer-end.html";

?>