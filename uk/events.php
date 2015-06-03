<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "uk";
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
<h1>Освітні курс</h1>
<p>Основна мета курсів – це допомогти студентам різних спеціальностей здобути додаткові навики та знання, адже лише університетських знань іноді недостатньо. Участь в таких подіях допоможе краще підготуватись до великого кар’єрного майбутнього. Також під час курсів ви отримаєте незрівнянну можливість відкрити для себе світ та нові культури.</p>

<?php
if ($_GET["show"] == "courses") {
include "pages/courses.html";
}
else {?>
<p style="float:right; margin: 30px;"><a href="?show=courses" class="link-button">Дізнатися більше</a></p>
<?php }
?>
</td>
</tr>
</table>

<table>
<tr><td width="70%" style="background-color:#ededed">
<h1>Інженерний Ярмарок Кар'єри</h1>
<br />
<br />
<p>Метою події є надання можливості студентам стати справжніми професіоналами в одній з провідних компаній України.</p>
<?php
if ($_GET["show"] == "ejf") {?>
<br />
<?php }
else { ?>
<p style="float:left; margin: 30px;"><a href="?show=ejf" class="link-button">Дізнатися більше</a></p>
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
<p>В рамках Інженерних змагань ми надаємо можливість студентам технічних університетів розвинути свої вміння та реалізувати свої ідеї завдяки співпраці з компаніями та спілкуванню з європейською студентською спільнотою.</p>
<p><strong>Візія</strong> - просування інженерної думки в Україні шляхом стврення сприятливих умов для її виникнення і розвитку.</p>
<br />
<?php
if ($_GET["show"] == "ebec") {
include "pages/ebec.html";
}
else {?>
<p style="float:right; margin: 30px;"><a href="?show=ebec" class="link-button">Дізнатися більше</a></p>
<?php }
?>
</td>
</tr>
</table>

<?php
require "../resources/tpl/footer.php";
require "../resources/tpl/body_off.html";
?>