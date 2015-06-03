<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "en";
$array = parse_ini_file($lang.".ini");
require"../resources/tpl/body_on.php";
require"../resources/tpl/header.php"
?>
<hr style="width:100%" />
<table>
<tr>
<td width="30%">
<img src="../resources/img/logo/courses.jpg" alt="Season Event" width="200" class="fL"/>
</td>

<td width="70%">
<br />
<h1>BEST courses</h1>
<p>BEST courses are the most important, valuable and 
at the same time interesting project for students from all 
over Europe and from Lviv as well. By organizing these 
events BEST accomplishes its main mission - to provide 
free complementary education to students.</p>

<?php
if ($_GET["show"] == "courses") {
include "pages/courses.html";
}
else {?>
<p style="float:right; margin: 30px;"><a href="?show=courses" class="link-button">Read More</a></p>
<?php }
?>
</td>
</tr>
</table>

<table>
<tr><td width="70%" style="background-color:#ededed">
<h1>Engineering Job Fair</h1>
<p>Engineering Job Fair (EJF) is an event which gives young people an opportunity to communicate directly 
with company representatives and ask them about possible internship, vacancies or to find a desirable job directly on the Fair.</p>
<?php
if ($_GET["show"] == "ejf") {?>
<br />
<?php }
else { ?>
<p style="float:left; margin: 30px;"><a href="?show=ejf" class="link-button">Read More</a></p>
<?php }
?>
<td width="30%" style="background-color:#ededed">
<img src="../resources/img/logo/EJF_logo.png" alt="Engineering Job Fair" width="200" class="fL"/>
</td>
</tr>
<?php
if ($_GET["show"] == "ejf") {
include "pages/ejf.html";
}?>
</table>


<table>
<tr>
<td width="30%">
<img src="../resources/img/logo/EBEC_logo.png" alt="European BEST Engineering Competition" width="200" class="fL"/>
</td>

<td width="70%">
<h1>EBEC</h1>
<p>The basic idea of the EBEC is to enable senior students of technical educational universities to reveal their 
skills, develop logical thinking and present themselves in front of the potential employer.</p>
<br />
<?php
if ($_GET["show"] == "ebec") {
include "pages/ebec.html";
}
else {?>
<p style="float:right; margin: 30px;"><a href="?show=ebec" class="link-button">Read More</a></p>
<?php }
?>
</td>
</tr>
</table>

<?php
require "../resources/tpl/footer.php";
require "../resources/tpl/body_off.html";
?>