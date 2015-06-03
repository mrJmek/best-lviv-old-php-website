<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "en";
$array = parse_ini_file($lang.".ini");
require"../resources/tpl/body_on.php";
require"../resources/tpl/header.php";
require"main_page.php";
require"../resources/tpl/footer.php";
require"../resources/tpl/body_off.html";
?>