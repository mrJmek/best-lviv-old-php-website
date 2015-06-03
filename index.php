<?php
if ($_SERVER['HTTP_ACCEPT_LANGUAGE'] == "uk_UA or ru_RU") {
header("Location: en/");
exit;
}
else {
header("Location: uk/");
exit;
}
?>