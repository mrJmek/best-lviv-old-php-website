<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "uk";
$array = parse_ini_file($lang.".ini");
require"../resources/tpl/body_on.php";
require"../resources/tpl/header.php"

?>

<hr style="width:100%" />
<table width="100%">
<tr>
<td width="30%"><img class="fL" src="../resources/img/board/Anna_Ustinova.jpg" alt="Анна Устінова" width="200" height="200"/></td>
<td width="70%"><h2>Президент локального осередку BEST Lviv</h2><br />
<p><strong>Анна Устінова</strong></p><br />
<p>Контактна інформація:</p>
<p>тел: +38 093 855 52 40</p>
<p>e-mail:<a target="_blank" href="mailto:ann.ustinova@best.eu.org"> Ann.Ustinova@BEST.eu.org</a></p>
<div style="margin-left:30px;">
<a target="_blank" href="https://www.facebook.com/anna.ustinova.779"><img class="social" src="../resources/img/logo/social/facebook.png"></a>
<a target="_blank" href="http://vk.com/id10101397"><img class="social" src="../resources/img/logo/social/vk.png"></a></div>
</td>
</tr>

<tr style="background-color:#ededed">
<td width="30%"><img class="fL" src="../resources/img/board/Iryna_Kruk.jpg" alt="Ірина Крук" width="200" height="200"/></td>
<td width="70%">
<h2>Секретар локального осередку BEST Lviv</h2><br />
<p><strong>Ірина Крук</strong></p><br />
<p>Контактна інформація:</p>
<p>тел: +38 093 347 35 03</p>
<p>e-mail:<a target="_blank" href="mailto:iryna.kruk@best.eu.org"> Iryna.Kruk@BEST.eu.org</a></p>
<div style="margin-left:30px;">
<a target="_blank" href="https://www.facebook.com/iryna.kruk.9"><img class="social" src="../resources/img/logo/social/facebook.png"></a>
<a target="_blank" href="http://vk.com/ireen_a"><img class="social" src="../resources/img/logo/social/vk.png"></a></div>
</td>
</tr>

<tr>
<td width="30%"><img class="fL" src="../resources/img/board/Roksolana_Tkachuk.jpg" alt="Роксолана Ткачук" width="200" height="200"/></td>
<td width="70%">
<h2>Скарбник локального осередку BEST Lviv</h2><br />
<p><strong>Роксолана Ткачук</strong></p><br />
<p>Контактна інформація:</p>
<p>тел: +38 093 883 74 24</p>
<p>e-mail:<a target="_blank" href="mailto:roksolana.tkachuk@best.eu.org"> Roksolana.Tkachuk@BEST.eu.org</a></p>
<div style="margin-left:30px;">
<a target="_blank" href="https://www.facebook.com/roksolana.tkachuk.1"><img class="social" src="../resources/img/logo/social/facebook.png"></a>
<a target="_blank" href="http://vk.com/tkachuk_roksa"><img class="social" src="../resources/img/logo/social/vk.png"></a></div>
</td>
</tr>

<tr style="background-color:#ededed">
<td width="30%"><img class="fL" src="../resources/img/board/Khristina_Korzh.jpg" alt="Христина Корж" width="200" height="200"/></td>
<td width="70%">
<h2>Відповідальний за людські ресурси BEST Lviv</h2><br />
<p><strong>Христина Корж</strong></p><br />
<p>Контактна інформація:</p>
<p>тел: +38 063 186 29 59</p>
<p>e-mail:<a target="_blank" href="mailto:khristina-mariia.korzh@best.eu.org"> Khristina-Mariia.Korzh@BEST.eu.org</a></p>
<div style="margin-left:30px;">
<a target="_blank" href="https://www.facebook.com/khristina.korzh"><img class="social" src="../resources/img/logo/social/facebook.png"></a>
<a target="_blank" href="http://vk.com/id12045447"><img class="social" src="../resources/img/logo/social/vk.png"></a></div>
</td>
</tr>

<tr>
<td width="30%"><img class="fL" src="../resources/img/board/Bogdan_Rudka.jpg" alt="Контактна Інформація" width="200" height="220"/></td>
<td width="70%">
<h2>Відповідальний за PR та маркетинг BEST Lviv</h2><br />
<p><strong>Богдан Рудка</strong></p><br />
<p>Контактна інформація:</p>
<p>тел: +38 063 055 07 41</p>
<p>e-mail:<a target="_blank" href="mailto:bogdan.rudka@best.eu.org"> bogdan.rudka@best.eu.org</a></p>
<div style="margin-left:30px;">
<a target="_blank" href="https://www.facebook.com/bogdan.rudka"><img class="social" src="../resources/img/logo/social/facebook.png"></a>
<a target="_blank" href="http://vk.com/id12842755"><img class="social" src="../resources/img/logo/social/vk.png"></a></div>
</td>
</tr>
</table>

<?php
require"../resources/tpl/footer.php";
require"../resources/tpl/body_off.html";
?>